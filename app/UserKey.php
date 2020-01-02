<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserKey extends Model
{
    //
    protected $table = 'user_key';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'user_key'
    ];
}
