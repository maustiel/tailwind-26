<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['title', 'description', 'category', 'min_players', 'max_players', 'duration', 'cover'])]
class Game extends Model
{
    /**
     * Les catégories proposées dans le formulaire d'ajout.
     */
    public const CATEGORIES = ['Ambiance', 'Cartes', 'Coopératif', 'Familial', 'Réflexion', 'Stratégie'];

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }

    /**
     * Le nombre de joueurs, en toutes lettres : « 2 à 4 joueurs », « 1 à 5 joueurs ».
     */
    public function playersLabel(): string
    {
        if ($this->min_players === $this->max_players) {
            return $this->min_players.' joueurs';
        }

        return $this->min_players.' à '.$this->max_players.' joueurs';
    }

    /**
     * Le chemin de la couverture, ou une couverture neutre pour un jeu ajouté sans image.
     */
    public function coverPath(): string
    {
        return $this->cover ?? 'images/covers/default.svg';
    }

    protected function casts(): array
    {
        return [
            'min_players' => 'integer',
            'max_players' => 'integer',
            'duration' => 'integer',
        ];
    }
}
