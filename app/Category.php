<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function emission(){
        return $this->hasMany('App\Emission');
    }

    public function emodel(){
        return $this->hasMany('App\Emodel');
    }

    public function parentCat(){
        return Category::where('parent_id', $this->id)->first();
    }
}
