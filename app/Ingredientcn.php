<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientcn extends Model
{
    //
    protected $table = 'ingredientcn';
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
