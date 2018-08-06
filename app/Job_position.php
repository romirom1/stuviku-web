<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_position extends Model
{
    public function staff(){
    	return $this->hasMany('App\Staff','id_job');
    }
}
