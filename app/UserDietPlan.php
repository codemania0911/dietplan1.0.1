<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDietPlan extends Model
{
    //
    protected $table = 'user_diet_plan';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_key_num',
        'country',
        'breakfast',
        'brunch',
        'lunch',
        'dinner'
    ];
}
