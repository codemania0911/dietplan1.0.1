<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientde extends Model
{
    //
    protected $table = 'ingredientde';
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
