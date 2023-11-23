<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cocktail;

class CocktailSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $path = './drinksData.json';
        $cocktailsString = file_get_contents($path);
        $cocktails = json_decode($cocktailsString, true);

        foreach ($cocktails as $cocktail) {
            $new_cocktail = new Cocktail();
            $new_cocktail->strDrink = $cocktail['strDrink'];
            $new_cocktail->strCategory = $cocktail['strCategory'];
            if ($cocktail['strAlcoholic'] != 'Alcoholic') {
                $new_cocktail->strAlcoholic = false;
            } else {
            }
            $new_cocktail->strGlass = $cocktail['strGlass'];
            $new_cocktail->strInstructions = $cocktail['strInstructions'];
            $new_cocktail->strDrinkThumb = $cocktail['strDrinkThumb'];
            $new_cocktail->strIngredient1 = $cocktail['strIngredient1'];
            $new_cocktail->strIngredient2 = $cocktail['strIngredient2'];
            $new_cocktail->strIngredient3 = $cocktail['strIngredient3'];
            $new_cocktail->strIngredient4 = $cocktail['strIngredient4'];
            $new_cocktail->strIngredient5 = $cocktail['strIngredient5'];
            $new_cocktail->strIngredient6 = $cocktail['strIngredient6'];
            $new_cocktail->strMeasure1 = $cocktail['strMeasure1'];
            $new_cocktail->strMeasure2 = $cocktail['strMeasure2'];
            $new_cocktail->strMeasure3 = $cocktail['strMeasure3'];
            $new_cocktail->strMeasure4 = $cocktail['strMeasure4'];
            $new_cocktail->strMeasure5 = $cocktail['strMeasure5'];
            $new_cocktail->strMeasure6 = $cocktail['strMeasure6'];
            $new_cocktail->save();
        }
    }
}
