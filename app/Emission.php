<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emission extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function language(){
        return $this->belongsTo('App\Language');
    }

    public function production(){
        return $this->belongsTo('App\Production');
    }

    public function introducer(){
        return $this->belongsToMany('App\Introducer');
    }

    public function eplay(){
        return $this->hasMany('App\Eplay');
    }
}