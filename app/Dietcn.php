<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietcn extends Model
{
    //
    protected $table = 'dietcn';
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
