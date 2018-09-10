<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model 
{

    protected $table = 'vehicules';
    public $timestamps = false;

    public function moniteur()
    {
        return $this->belongsTo('App\Moniteur');
    }

    public function Vehicule2()
    {
        return $this->hasMany('Alertes');
    }

}