<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotisation_association extends Model
{
    protected $table='cotisation_associations';

    public function adherent_association(){
    	return $this->belongsTo('App\Adherent_association');
    }
}
