<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $table = 'personnes';
    
    //public $timestamps = false;

     public function role(){
    	return $this->belongsTo('App\Role');
    }

}
