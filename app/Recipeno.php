<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipeno extends Model
{
    //
    protected $table = 'recipeno';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
