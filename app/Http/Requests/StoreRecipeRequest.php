<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeRequest extends FormRequest
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
                  'description' => 'nullable',
                  'image' => 'nullable|image',
                  'calories_total' => 'required|decimal:2',
                  'calories_hundred_grams' => 'required|decimal:2',
                  'carbs_total' => 'required|decimal:2',
                  'carbs_hundred_grams' => 'required|decimal:2',
                  'sugars_total' => 'nullable|decimal:2',
                  'sugars_hundred_grams' => 'nullable|decimal:2',
                  'fats_total' => 'required|decimal:2',
                  'fats_hundred_grams' => 'required|decimal:2',
                  'saturated_fats_total' => 'required|decimal:2',
                  'saturated_fats_hundred_grams' => 'required|decimal:2',
                  'proteins_total' => 'required|decimal:2',
                  'proteins_hundred_grams' => 'required|decimal:2',
                  'fibers_total' => 'nullable|decimal:2',
                  'fibers_hundred_grams' => 'nullable|decimal:2',
                  'weight_total' => 'required|decimal:2',
                  'servings' => 'nullable|integer',
            ];
      }
}
