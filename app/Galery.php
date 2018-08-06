<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    public function services(){
    	return $this->belongTo('App\Service','id_service');
    }
}
