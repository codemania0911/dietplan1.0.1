<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipede extends Model
{
    //
    protected $table = 'recipede';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
