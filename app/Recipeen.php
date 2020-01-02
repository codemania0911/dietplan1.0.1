<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipeen extends Model
{
    //
    protected $table = 'recipeen';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
