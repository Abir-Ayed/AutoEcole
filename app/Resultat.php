<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model 
{

    protected $table = 'Resultats';
    public $timestamps = false;

    public function Resultat()
    {
        return $this->belongsTo('Examen');
    }

}