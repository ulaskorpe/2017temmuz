<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class izinController extends Controller
{
 public function izinler(){
 	Session::put('sayfa',4);
  	return view('izinler');
  }
}
