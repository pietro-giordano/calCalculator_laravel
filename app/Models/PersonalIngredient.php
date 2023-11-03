<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalIngredient extends Model
{
      use HasFactory;

      protected $fillable = [
            'name',
            'brand',
            'description',
            'image',
            'calories_hundred_grams',
            'carbs_hundred_grams',
            'sugars_hundred_grams',
            'fats_hundred_grams',
            'saturated_fats_hundred_grams',
            'proteins_hundred_grams',
            'fibers_hundred_grams',
            'user_id',
      ];

      // relazione many to one verso users
      public function user(): BelongsTo
      {
            return $this->belongsTo(User::class);
      }
}
