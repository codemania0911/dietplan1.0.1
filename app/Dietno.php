<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietno extends Model
{
    //
    protected $table = 'dietno';
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
