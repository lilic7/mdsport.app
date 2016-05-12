<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function eplay(){
        return $this->hasMany('App\Eplay');
    }

    public function getNameAttribute($name){
        return strtoupper($name);
    }
}
