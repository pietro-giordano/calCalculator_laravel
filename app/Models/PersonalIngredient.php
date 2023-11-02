<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalIngredient extends Model
{
      use HasFactory;

      // relazione many to one verso users
      public function user(): BelongsTo
      {
            return $this->belongsTo(User::class);
      }
}
