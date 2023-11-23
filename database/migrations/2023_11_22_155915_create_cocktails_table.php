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

        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('strDrink');
            $table->string('strCategory');
            $table->boolean('strAlcoholic')->default(1);
            $table->string('strGlass')->nullable();
            $table->text('strInstructions')->nullable();
            $table->string('strDrinkThumb')->nullable();
            for ($i = 0; $i < 6; $i++) {
                $table->string('strIngredient' . $i + 1)->nullable();
            }
            for ($i = 0; $i < 6; $i++) {
                $table->string('strMeasure' . $i + 1)->nullable();
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
