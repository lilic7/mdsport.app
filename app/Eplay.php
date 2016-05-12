<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eplay extends Model
{
    public function emission(){
        return $this->belongsTo('App\Emission');
    }

    public function format(){
        return $this->belongsTo('App\Format');
    }
}
