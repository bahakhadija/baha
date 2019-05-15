<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    protected $table='adherents';

    public function contrat(){
    	  return $this->belongsTo('App\Contrat');
    }
    public function consommations(){
    	return $this->hasMany('App\Consommation');
    }
}
