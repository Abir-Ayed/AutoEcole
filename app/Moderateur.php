<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Moderateur extends Authenticatable
{
    protected $table = 'Moderateurs';
        protected $guard ='moderateur';

    public $timestamps =false;

    protected $fillable = [
        'name', 'email','date_naissance','telephone','role','password','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   
}