<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /*
    |----------------------------
    |     Model Association
    |----------------------------*/

    public function users(){
        return $this->hasMany('App\User','role_id','uniqid');
    }
}
