<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherent_association extends Model
{
    protected $table='adherent_associations';


    public function cotisations(){
    	return $this->hasMany('App\Cotisation_association');
    }
}


