<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientit extends Model
{
    //
    protected $table = 'ingredientit';
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
