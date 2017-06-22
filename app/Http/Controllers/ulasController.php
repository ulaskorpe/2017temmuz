<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Personel;
use Session;
use Auth;
use App\Http\Models\Departman;
class ulasController extends Controller
{






public function __construct(){
  $this->middleware('auth');
}


/*public function giris(){
  	
if(!Auth()->id()){
     return view('login-simple');
}else{
  	return view('index')->middleware('auth');
}


}*/

public function logout(){
  Auth::logout();
  return redirect()->route('giris');
}


  public function personel(){
    Session::put('sayfa',1);
    $personel= Personel::whereRaw('id!=?',array(0))->orderBy('giris_tarihi')->get();
    $departmanlar= Departman::whereRaw('id!=?',array(0))->get();
    return  view('personel',array('personel'=>$personel,'departmanlar'=>$departmanlar));
  }



public function personelIslem(Request $gelenler){
   Session::put('sayfa',1);
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
Session::put('sayfa',1);
if($id!=0){
Personel::where('id','=',$id)->delete();
}

return redirect()->route('personel');

}///fx personelsil


public function personelGuncelle($id=0){
Session::put('sayfa',1);
    $departmanlar= Departman::whereRaw('id!=?',array(0))->get();
     $personel= Personel::whereRaw('id!=?',array(0))->get();
     $seciliPersonel=Personel::whereRaw('id=?',array($id))->first();;

      return  view('personel',array('personel'=>$personel,'seciliPersonel'=>$seciliPersonel,'departmanlar'=>$departmanlar));

}///fx personelguncelle




}////classs
