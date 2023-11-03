<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
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
      ];

      // relazione many to many con recipes
      public function ingredients(): BelongsToMany
      {
            return $this->belongsToMany(Recipe::class);
      }
}
