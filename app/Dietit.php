<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietit extends Model
{
    //
    protected $table = 'dietit';
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
