<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'email'])]
class Member extends Model
{
    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class);
    }
}
