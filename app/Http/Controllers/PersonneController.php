<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function getLogin(){
    	return view('login');
    }
    public function postLogin(){
    	
    	if(isset($_POST['email']) AND isset($_POST['password'])){
		
		
			return 'bien';
		}
		else
			return 'erreur';
    }
}
