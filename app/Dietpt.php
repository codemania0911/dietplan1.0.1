<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietpt extends Model
{
    //
    protected $table = 'dietpt';
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
