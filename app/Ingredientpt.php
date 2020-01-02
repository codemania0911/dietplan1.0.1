<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientpt extends Model
{
    //
    protected $table = 'ingredientpt';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'ingredient',
        'value',
        'unit',
        'ingredient_name',
        'ingredient_div'
    ];
}
