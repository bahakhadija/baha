<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statut_contrat extends Model
{
    //
    protected $table='statut_contrats';

    public function contrat(){
    	return $this->hasMany('App\Contrat');
    }
}
