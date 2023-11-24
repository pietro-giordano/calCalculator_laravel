<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecipeRequest extends FormRequest
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
                  'calories_total' => 'required',
                  'calories_hundred_grams' => 'required',
                  'carbs_total' => 'required',
                  'carbs_hundred_grams' => 'required',
                  'sugars_total' => 'nullable',
                  'sugars_hundred_grams' => 'nullable',
                  'fats_total' => 'required',
                  'fats_hundred_grams' => 'required',
                  'saturated_fats_total' => 'required',
                  'saturated_fats_hundred_grams' => 'required',
                  'proteins_total' => 'required',
                  'proteins_hundred_grams' => 'required',
                  'fibers_total' => 'nullable',
                  'fibers_hundred_grams' => 'nullable',
                  'weight_total' => 'required',
                  'servings' => 'nullable|integer',
                  'personally_created' => 'required|boolean',
            ];
      }
}
