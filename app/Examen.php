<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model {


    protected $table = 'Examens';
    public $timestamps = false;

    public function Examen1()
    {
        return $this->hasOne('Resultat');
    }

    public function Candidat()
    {
        return $this->belongsTo('App\Candidat');
    }



}