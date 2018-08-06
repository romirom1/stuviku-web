<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function services(){
    	return $this->belongsTo('App\Service','id_service');
    }

    public function costumers(){
    	return $this->belongsTo('App\Costumer','id_costumer');
    }
}
