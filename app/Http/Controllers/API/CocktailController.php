<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::all();
        //$projects = Project::orderByDesc('id')->paginate(5);
        return response()->json([
            'status' => 'success',
            'author' => 'gianluca',
            'result' => $cocktails
        ]);
    }
}
