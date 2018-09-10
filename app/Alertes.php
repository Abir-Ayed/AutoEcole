<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alertes extends Model 
{

    protected $table = 'Alertes';
    public $timestamps = false;

    public function Alertes()
    {
        return $this->belongsTo('Vehicule');
    }
    public function Alerte2()
    {
        return $this->belongsTo('Admin');
    }

}