<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consommation extends Model
{
    protected $table='consommations';


    public function facture(){
    	return $this->belongsTo('App\Facture');
    }

    public function index(){
    	return $this->belongsTo('App\Index',id_index_nouvel);
    	return $this->belongsTo('App\Index',id_index_ancien);
    }

    public function entretiens(){
    	return $this->hasMany('App\Entretien');
    }
    public function adherent(){
    	return $this->belongsTo('App\Adherent');
    }
}
