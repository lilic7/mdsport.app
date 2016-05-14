<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introducer extends Model
{
    public function emission(){
        return $this->belongsToMany('App\Emission');
    }

    public function emodel(){
        return $this->belongsToMany('App\Emodel');
    }

    public function getNameAttribute($name){
        return ucwords($name);
    }
}