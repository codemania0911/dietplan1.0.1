<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietgb extends Model
{
    //
    protected $table = 'dietgb';
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
