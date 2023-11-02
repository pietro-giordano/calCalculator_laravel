<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
      use HasFactory;

      // relazione many to many con recipes
      public function ingredients(): BelongsToMany
      {
            return $this->belongsToMany(Recipe::class);
      }
}
