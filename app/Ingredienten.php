<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    //
    protected $table = 'ingredienten';
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
