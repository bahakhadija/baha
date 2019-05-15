<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $table='paiements';

    public function type_paiement(){
    	return $this->belongsTo('App\Type_paiement');
    }

    public function factures(){
    	return $this->belongsToMany('App\Facture')->using('App\Recu_paiement');
    }
}
