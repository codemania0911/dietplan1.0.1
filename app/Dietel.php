<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietel extends Model
{
    //
    protected $table = 'dietel';
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
