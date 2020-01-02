<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietus extends Model
{
    //
    protected $table = 'dietus';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'image_url',
        'video',
        'kcal',
        'time',
        'material',
        'division'
    ];
}
