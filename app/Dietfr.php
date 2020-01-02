<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietfr extends Model
{
    //
    protected $table = 'dietfr';
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
