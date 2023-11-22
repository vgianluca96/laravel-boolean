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
        $cocktails = [
            [
                "name" => "Margarita",
                "ingr1" => "Tequila",
                "ingr2" => "Triple sec",
                "ingr3" => "Lime juice",
            ],
            [
                "name" => "Blue Margarita",
                "ingr1" => "Tequila",
                "ingr2" => "Blue Curacao",
                "ingr3" => "Lime juice",
            ],
            [
                "name" => "Gin Tonic",
                "ingr1" => "Gin",
                "ingr2" => "Tonic Water",
                "ingr3" => "Lemon Peel",
            ]
        ];


        foreach ($cocktails as $cocktail) {
            $new_cocktail = new Cocktail();
            $new_cocktail->name = $cocktail['name'];
            $new_cocktail->ingredient_1 = $cocktail['ingr1'];
            $new_cocktail->ingredient_2 = $cocktail['ingr2'];
            $new_cocktail->ingredient_3 = $cocktail['ingr3'];
            $new_cocktail->save();
        }
    }
}
