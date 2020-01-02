<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientfr extends Model
{
    //
    protected $table = 'ingredientfr';
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
