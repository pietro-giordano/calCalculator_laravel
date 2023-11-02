<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
      use HasFactory;

      // relazione many to one verso users
      public function user(): BelongsTo
      {
            return $this->belongsTo(User::class);
      }

      // relazione many to many con ingredients
      public function ingredients(): BelongsToMany
      {
            return $this->belongsToMany(Ingredient::class);
      }
}
