<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    //
    protected $table='indexs';

    public function consommation(){
    	return $this->hasOne('App\Consommation');
    }
}
