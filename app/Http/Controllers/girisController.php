<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Session;
class girisController extends Controller
{
public function giris(){
	Session::put('sayfa',0);

  if (Auth::check()){
    return view('index'); 
    //return redirect()->route('personel');
}else{
  return view('login-simple');
  //return view('auth.login');
    
}


}
}
