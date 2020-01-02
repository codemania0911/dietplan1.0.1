<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietde extends Model
{
    //
    protected $table = 'dietde';
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
