<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientkr extends Model
{
    //
    protected $table = 'ingredientkr';
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
