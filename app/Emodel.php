<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        return $this->belongsToMany('App\Introducer');
    }

    public function getDefaultDurationAttribute($seconds){
        return $this->duration($seconds);
    }

    private function duration($seconds){

        $hour = floor($seconds / 3600);
        if($hour){
            return gmdate("G:i:s", $seconds);
        }else{
            return gmdate("i:s", $seconds);
        }
    }
}
