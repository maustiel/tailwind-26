<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['game_id', 'member_id', 'borrowed_at', 'due_at', 'returned_at'])]
class Loan extends Model
{
    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * Le statut du prêt, calculé à partir des dates : 'returned', 'overdue' ou 'ongoing'.
     */
    public function status(): string
    {
        if ($this->returned_at !== null) {
            return 'returned';
        }

        if ($this->due_at->lt(today())) {
            return 'overdue';
        }

        return 'ongoing';
    }

    /**
     * Le statut en français, pour l'affichage.
     */
    public function statusLabel(): string
    {
        return match ($this->status()) {
            'returned' => 'Rendu',
            'overdue' => 'En retard',
            'ongoing' => 'En cours',
        };
    }

    protected function casts(): array
    {
        return [
            'borrowed_at' => 'date',
            'due_at' => 'date',
            'returned_at' => 'date',
        ];
    }
}
