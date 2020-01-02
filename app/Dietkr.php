<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietkr extends Model
{
    //
    protected $table = 'dietkr';
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
