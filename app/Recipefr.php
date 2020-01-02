<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipefr extends Model
{
    //
    protected $table = 'recipefr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
