<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Personel;

class ulasController extends Controller
{


  public function giris(){
  	 return view('login-simple');

  	//return view('index');

  }



  public function postLogin(Request $gelenler){
  	$kontrol = Validator::make($gelenler->all(),array(

  		'username'=>'required',
  		'password'=>'required'

  		));

  	if($kontrol->fails()){

  			return redirect()->route('giris');//webdeki as ismi
  	}else{
  		$username=$gelenler->input('username');
  		$password=$gelenler->input('password');

if($this->middleware('auth')){
  return "login";
}else{
  		//return $username.":".$password;
  	return view('login-simple',array('username'=>$username,'password'=>$password));
}

  	}

  }




public function __construct(){
  //$this->middleware('auth');
}

  public function personel(){
    $personel= Personel::whereRaw('id!=?',array(0))->get();
    return  view('personel',array('personel'=>$personel));
  }



public function personelIslem(Request $gelenler){
$pid=$gelenler->input('id');
$kontrol = Validator::make($gelenler->all(),array(

    'adi_soyadi'=>'required|min:4|string','gorevi'=>'required','departman_id'=>'required|numeric'

  ));

if($kontrol->fails()){
  return redirect()->to('/personel')->withErrors($kontrol)->withInput();
}else{

if(empty($pid)){

$islem = Personel::create(array(
  'adi_soyadi'=>$gelenler->input('adi_soyadi'),
  'gorevi'=>$gelenler->input('gorevi'),
  'giris_tarihi'=>$gelenler->input('giris_tarihi'),
  'departman_id'=>$gelenler->input('departman_id')

  ));


}else{
$person=Personel::find($pid);


$person->adi_soyadi=$gelenler->input('adi_soyadi');
$person->gorevi=$gelenler->input('gorevi');
$person->giris_tarihi=$gelenler->input('giris_tarihi');
$person->departman_id=$gelenler->input('departman_id');
$person->save();

}

}////kontrol true

return redirect()->route('personel');

}///fx personelKaydet


public function personelSil($id=0){

if($id!=0){

Personel::where('id','=',$id)->delete();


}

 return redirect()->route('personel');

}///fx personelsil


public function personelGuncelle($id=0){

     $personel= Personel::whereRaw('id!=?',array(0))->get();
     $seciliPersonel=Personel::whereRaw('id=?',array($id))->first();;

      return  view('personel',array('personel'=>$personel,'seciliPersonel'=>$seciliPersonel));

}///fx personelguncelle


public function departmanlar(){
  return view('departman');
}


}////classs
