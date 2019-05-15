<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $table='factures';

    public function paiements(){
    	return $this->belongsToMany('App\Paiement')->using('App\Recu_paiement');
    }

    public function consommation(){
    	return $this->hasOne('App\Consommation');
    }
}
