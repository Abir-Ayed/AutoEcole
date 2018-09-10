<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends User
{



    protected $table = 'Candidats';
    public $timestamps = false;

    protected $guard ='admin';


      public function Condidat2()
    {
        return $this->belongsTo('Auto_ecole');
    }

    public function Condidat3()
    {
        return $this->hasMany('Seance');
    }
    public function Examens()
    {
        return $this->hasMany('App\Examen');
    }
 public function Paiement()
    {
        return $this->hasOne('Paiement');
    }

}