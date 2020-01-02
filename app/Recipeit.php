<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipeit extends Model
{
    //
    protected $table = 'recipeit';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
