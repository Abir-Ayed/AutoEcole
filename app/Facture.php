<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
        public $timestamps = false;
        public function Facture()
    {
        return $this->belongsTo('Paiement');
    }

}
