<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_paiement extends Model
{
    //
    protected $table='type_paiements';


    public function contrat(){
    	return $this->hasMany('App\Contrat');
    }

    public function paiement(){
    	return $this->hasMany('App\Paiement');
    }

    public function caisse(){
    	return $this->hasMany('App\Caisse');
    } 
}
