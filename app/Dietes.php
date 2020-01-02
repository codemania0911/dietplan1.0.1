<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietes extends Model
{
    //
    protected $table = 'dietes';
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
