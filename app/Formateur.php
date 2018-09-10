<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formateur extends User
{ public $timestamps = false;

     public function Formateur()
    {
        return $this->hasMany('Seance');
    }


}
