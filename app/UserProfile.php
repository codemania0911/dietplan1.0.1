<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table = 'user_profile';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_key_num',
        'kcal',
        'water',
        'age',
        'weight',
        'archieve_weight',
        'bmi'
    ];
}
