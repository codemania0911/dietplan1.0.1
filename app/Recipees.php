<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipees extends Model
{
    //
    protected $table = 'recipees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
