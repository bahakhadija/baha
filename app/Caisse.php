<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caisse extends Model
{
    protected $table='caisses';

    public fonction type_paiement(){
    	return $this->belongsTo('App\Type_paiement');
    }
}
