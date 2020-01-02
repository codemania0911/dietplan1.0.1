<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;

class PdfdownloadController extends Controller
{
    //
    public function downloadpdf($lang, Request $request) {

        $a = $lang;
        $recipe_table_name = 'recipe'.$lang;
        $ingredients_table_name = 'ingredient'.$lang;
        $diet_recipes = DB::table($recipe_table_name)->where('diet_id', 19)->get();
        $diet_ingredients = DB::table($ingredients_table_name)->where('diet_id', 19)->get();

        $pdf = PDF::loadView('dietplan.pdfcontent', [
            'diet_recipes'        => $diet_recipes,
            'diet_ingredients'    => $diet_ingredients
        ]);
        return $pdf->download('Grocery_list_for_week.pdf');
    }

}
