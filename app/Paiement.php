<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model 
{

    protected $table = 'Paiements';
    public $timestamps = false;

    public function Paiement1()
    {
        return $this->belongsTo('Candidat');
    }

    public function Paiement2()
    {
        return $this->hasOne('Facture');
    }

}