<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientel extends Model
{
    //
    protected $table = 'ingredientel';
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
