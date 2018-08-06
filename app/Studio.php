<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Studio extends Authenticatable
{
    use Notifiable;

    protected $guard = 'studio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'job_title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admins(){
        return $this->belongsTo('App\Admin','id_admin');
    }

    public function services(){
        return $this->hasMany('App\Service','id_studio');
    }
}