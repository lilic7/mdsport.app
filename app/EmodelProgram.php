<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmodelProgram extends Model
{
    public function emodel(){
        return $this->belongsTo('App\Emodel');
    }
}
