<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function emission(){
        return $this->hasMany('App\Emission');
    }

    public function emodel(){
        return $this->hasMany('App\Emodel');
    }

    public function getNameAttribute($name){
        return strtoupper($name);
    }
}
