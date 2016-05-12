<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emodel extends Model
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

    public function emodelProgram(){
        return $this->hasMany('App\EmodelProgram');
    }

    public function introducer(){
        return $this->hasMany('App\Introducer');
    }
}
