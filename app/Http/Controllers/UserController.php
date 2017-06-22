<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
 public function __construct(){
  	$this->middleware('auth');
	}


public function login(){
if (!Auth::check()){
	//return redirect()->route('giris');
	}
}

public function profil(){

	    return view('layouts.profil');
  }
  
}
