<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('App\User'); #Creating relationship with the user
    }

    public function location() {
        return $this->hasOne('App\Location');
    }
}
