<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipekr extends Model
{
    //
    protected $table = 'recipekr';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
