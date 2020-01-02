<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientgb extends Model
{
    //
    protected $table = 'ingredientgb';
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
