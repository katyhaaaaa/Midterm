<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    function user() {
        return $this->hasMany('App/User');
    } 
}
