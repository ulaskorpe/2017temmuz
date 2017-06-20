<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
class ulasController extends Controller
{
  public function uyeler(){
  	return  view('uyeler');
  }

  public function giris(){
  	return view('login-simple');
  }

  public function postLogin(Request $gelenler){
  	$kontrol = Validator::make($gelenler->all(),array(

  		'username'=>'required',
  		'password'=>'required'

  		));

  	if($kontrol->fails()){

  			return redirect()->route('giris');
  	}else{
  		$username=$gelenler->input('username');
  		$password=$gelenler->input('password');


  		return $username.":".$password;
  	}

  }
}
