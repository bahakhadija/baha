<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $table='activites';

    public function personnel(){
    	return $this->belongsTo('App\Personnel');
    }
}
