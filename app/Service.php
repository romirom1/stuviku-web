<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function galeries(){
    	return $this->hasMany('App\Galery','id_service');
    }

    public function requests(){
    	return $this->hasMany('App\Request','id_service');
    }

    public function categories(){
    	return $this->belongsTo('App\Category','id_category');
    }

    public function studios(){
    	return $this->belongsTo('App\Studio','id_studio');
    }
}

