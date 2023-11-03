<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      /**
       * Run the migrations.
       */
      public function up(): void
      {
            Schema::create('recipes', function (Blueprint $table) {
                  $table->id();
                  $table->string('name');
                  $table->longText('description')->nullable();
                  $table->binary('image')->nullable();
                  $table->decimal('calories_total', $scale = 2);
                  $table->decimal('calories_hundred_grams', $scale = 2);
                  $table->decimal('carbs_total', $scale = 2);
                  $table->decimal('carbs_hundred_grams', $scale = 2);
                  $table->decimal('sugars_total', $scale = 2)->nullable();
                  $table->decimal('sugars_hundred_grams', $scale = 2)->nullable();
                  $table->decimal('fats_total', $scale = 2);
                  $table->decimal('fats_hundred_grams', $scale = 2);
                  $table->decimal('saturated_fats_total', $scale = 2);
                  $table->decimal('saturated_fats_hundred_grams', $scale = 2);
                  $table->decimal('proteins_total', $scale = 2);
                  $table->decimal('proteins_hundred_grams', $scale = 2);
                  $table->decimal('fibers_total', $scale = 2)->nullable();
                  $table->decimal('fibers_hundred_grams', $scale = 2)->nullable();
                  $table->decimal('weight_total');
                  $table->integer('servings')->nullable();
                  $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
                  $table->timestamps();
            });
      }

      /**
       * Reverse the migrations.
       */
      public function down(): void
      {
            Schema::table('recipes', function (Blueprint $table) {
                  $table->dropForeign(['user_id']);
            });
            Schema::dropIfExists('recipes');
      }
};
