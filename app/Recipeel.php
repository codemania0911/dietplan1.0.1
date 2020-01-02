<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipeel extends Model
{
    //
    protected $table = 'recipeel';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
