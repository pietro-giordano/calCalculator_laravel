<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIngredientRequest extends FormRequest
{
      /**
       * Determine if the user is authorized to make this request.
       */
      public function authorize(): bool
      {
            return true;
      }

      /**
       * Get the validation rules that apply to the request.
       *
       * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
       */
      public function rules(): array
      {
            return [
                  'name' => 'required',
                  'brand' => 'required',
                  'description' => 'nullable',
                  'image' => 'nullable|image',
                  'calories_hundred_grams' => 'required|decimal:2',
                  'carbs_hundred_grams' => 'required|decimal:2',
                  'sugars_hundred_grams' => 'nullable|decimal:2',
                  'fats_hundred_grams' => 'required|decimal:2',
                  'saturated_fats_hundred_grams' => 'required|decimal:2',
                  'proteins_hundred_grams' => 'required|decimal:2',
                  'fibers_hundred_grams' => 'nullable|decimal:2',
                  'personally_created' => 'required|boolean',
                  'counter_views' => 'required|integer',
                  'last_use' => 'required|timezone:all',
            ];
      }
}
