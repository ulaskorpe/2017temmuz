<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Validator;
class UserController extends Controller
{
 public function __construct(){
  	$this->middleware('auth');
	}


public function login(){
if (!Auth::check()){
		return redirect()->route('giris');
	}
}



public function profil(){
		Session::put('sayfa',0);
	    return view('layouts.profil');
  }


public function profilUpdate(Request $gelenler){
	Session::put('sayfa',0);
	

$pid=Auth::id();
$kontrol = Validator::make($gelenler->all(),array(

    'name'=>'required|min:4|string','email'=>'required|email'
  ));

if($kontrol->fails()){
  return redirect()->to('/profil')->withErrors($kontrol)->withInput();
}else{

$person=User::find($pid);
$person->name=$gelenler->input('name');
$person->email=$gelenler->input('email');
$person->save();
}
return view('layouts.profil');

} ///profil

public function profilSifre(Request $gelenler){

Session::put('sayfa',0);
if( empty($gelenler->input('sifre')) || ($gelenler->input('sifre')!==$gelenler->input('sifre_yeniden')) ){

	echo "<script>alert('Girdiğiniz şifreler aynı değil');</script>";
	}else{


	}
	
	return view('layouts.profil');

} 

}
