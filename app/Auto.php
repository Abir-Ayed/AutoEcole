<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'Auto';
    public $timestamps = false;

    public function Auto()
    {
        return $this->hasMany('Candidat');
    }

    public function Auto2()
    {
        return $this->belongsTo('Admin');
    }
}
