<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipeus extends Model
{
    //
    protected $table = 'recipeus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
