<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIngredientRequest extends FormRequest
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
                  'calories_hundred_grams' => 'required',
                  'carbs_hundred_grams' => 'required',
                  'sugars_hundred_grams' => 'nullable',
                  'fats_hundred_grams' => 'required',
                  'saturated_fats_hundred_grams' => 'required',
                  'proteins_hundred_grams' => 'required',
                  'fibers_hundred_grams' => 'nullable',
                  'personally_created' => 'required|boolean',
            ];
      }
}
