<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entretien extends Model
{
    protected $table='entretiens';

    public function consommation(){
    	return $this->belongsTo('App\Consommation');
    }
}
