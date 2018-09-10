<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{    

	use Notifiable;

    protected $guard ='admin';
    protected $table = 'Admins';
    public $timestamps = false;

protected $fillable = [
        'name', 'email','date_naissance','telephone','role','password','admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];






 public function admin()
    {
        return $this->hasMany('Auto_ecole');
    }


}