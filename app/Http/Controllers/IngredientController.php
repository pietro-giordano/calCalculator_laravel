<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Models\Ingredient;
use Exception;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
      /**
       * Display a listing of the resource.
       */
      public function index()
      {
            //
      }

      /**
       * Store a newly created resource in storage.
       */
      public function store(StoreIngredientRequest $request)
      {
            try {
                  $data = $request->validated();
                  $data['user_id'] = auth()->user()->id;
                  $newIngredient = Ingredient::create($data);

                  return response()->json([
                        'success' => true,
                        'code' => 200,
                        'message' => 'Ok',
                        'ingredient' => $newIngredient
                  ]);
            } catch (Exception $e) {
                  return response()->json([
                        'success' => false,
                        'code' => $e->getCode(),
                        'message' => $e->getMessage()
                  ]);
            }
      }

      /**
       * Display the specified resource.
       */
      public function show(string $id)
      {
            //
      }

      /**
       * Update the specified resource in storage.
       */
      public function update(Request $request, string $id)
      {
            //
      }

      /**
       * Remove the specified resource from storage.
       */
      public function destroy(string $id)
      {
            //
      }
}
