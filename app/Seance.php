<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model 
{

    protected $table = 'Seances';
       public $timestamps = false;

    public function Seance1()
    {
        return $this->belongsTo('Moniteur');
    }

    public function Moniteur()
    {
        return $this->hasMany('App\Seance');
    }

    public function Seance2()
    {
        return $this->belongsTo('Candidat');
    }

    
    public function Seance()
    {
        return $this->belongsTo('Formateur');
    }

}