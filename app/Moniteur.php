<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moniteur extends User
{




    protected $table = 'moniteurs';
    public $timestamps = false;

    public function Vehicules()
    {
        return $this->hasMany('App\Vehicule');
    }

    public function Moniteur2()
    {
        return $this->hasMany('Seance');
    }



}