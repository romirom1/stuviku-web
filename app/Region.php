<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function staff(){
    	return $this->hasMany('App\Staff','id_region');
    }

    public function admins(){
    	return $this->hasMany('App\Admin','id_region');
    }
}
