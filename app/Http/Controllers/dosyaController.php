<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class dosyaController extends Controller
{
  public function dosyalar(){
  	Session::put('sayfa',3);
  	return view('dosyalar');
  }
}
