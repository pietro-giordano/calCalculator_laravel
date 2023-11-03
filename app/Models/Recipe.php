<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
      use HasFactory;

      protected $fillable = [
            'name',
            'description',
            'image',
            'calories_total',
            'calories_hundred_grams',
            'carbs_total',
            'carbs_hundred_grams',
            'sugars_total',
            'sugars_hundred_grams',
            'fats_total',
            'fats_hundred_grams',
            'saturated_fats_total',
            'saturated_fats_hundred_grams',
            'proteins_total',
            'proteins_hundred_grams',
            'fibers_total',
            'fibers_hundred_grams',
            'weight_total',
            'servings',
            'user_id',
      ];

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
