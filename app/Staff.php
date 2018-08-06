<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function job_positions(){
    	return $this->belongsTo('App\Job_position','id_job');
    }

    public function regions(){
    	return $this->belongsTo('App\Region','id_region');
    }
}
