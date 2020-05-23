<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user() {
        return $this->hasMany('App\User'); #Creating relationship with the user model
    }
}
