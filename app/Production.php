<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    public function emission(){
        return $this->hasMany('App\Emission');
    }

    public function emodel(){
        return $this->hasMany('App\Emodel');
    }
}
