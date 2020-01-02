<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipecn extends Model
{
    //
    protected $table = 'recipecn';
    protected $primaryKey = 'id';

    protected $fillable = [
        'diet_id',
        'recipe_description',
        'recipe_no',
        'recipe_img'
    ];
}
