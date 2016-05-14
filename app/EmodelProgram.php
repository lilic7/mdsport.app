<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmodelProgram extends Model
{
    public function emodel(){
        return $this->belongsTo('App\Emodel');
    }

    public function getWeekdayAttribute($day){
        $days = ["Duminică", "Luni", "Marți", "Miercuri", "Joi", "Vineri", "Sâmbătă"];
        return $days[$day];
    }
}
