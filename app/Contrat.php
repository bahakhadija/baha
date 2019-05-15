<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $table='contrats';

    public function statut_contrat(){
    	return $this->belongsTo('App\Statut_contrat');
    }

    public function adherent_eaux(){
    	return $this->belongsTo('App\Adhrent_eaux');
    }

     

     public function adherent(){
     return $this->hasOne('App\Adherent');	
     }

     public function type_paiement(){
    	return $this->belongsTo('App\Type_paiement');
    }
}
