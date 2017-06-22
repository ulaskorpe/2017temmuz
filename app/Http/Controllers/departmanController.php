<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Models\Personel;
use Session;
use Auth;
use App\Http\Models\Departman;

use DB;

class departmanController extends Controller
{
    
public function __construct(){
  $this->middleware('auth');
}


public function departmanlar(){
  Session::put('sayfa',2);

  $departmanlar= Departman::whereRaw('id!=?',array(0))->get();
  return view('departman',array('departmanlar'=>$departmanlar));
}


public function departmanGuncelle($id=0){
Session::put('sayfa',2);
    $departmanlar= Departman::whereRaw('id!=?',array(0))->get();
     
     $seciliDepartman=Departman::whereRaw('id=?',array($id))->first();;

      return  view('departman',array( 'seciliDepartman'=>$seciliDepartman,'departmanlar'=>$departmanlar));

}///fx departman





public function departmanIslem(Request $gelenler){
   Session::put('sayfa',2);
$pid=$gelenler->input('id');
$kontrol = Validator::make($gelenler->all(),array(

    'departman_adi'=>'required|min:4|string','kurulus_tarihi'=>'required|numeric'

  ));

if($kontrol->fails()){
  return redirect()->to('/departmanlar')->withErrors($kontrol)->withInput();
}else{

if(empty($pid)){

$islem = Departman::create(array(
  'departman_adi'=>$gelenler->input('departman_adi'),
  'kurulus_tarihi'=>$gelenler->input('kurulus_tarihi')
  

  ));


}else{
$departman=Departman::find($pid);


$departman->departman_adi=$gelenler->input('departman_adi');
$departman->kurulus_tarihi=$gelenler->input('kurulus_tarihi');
$departman->save();

}

}////kontrol true

return redirect()->route('departmanlar');

}///fx personelKaydet


public function departmanSil($id=0){
Session::put('sayfa',2);
$departman=Departman::find($id);
    $departmanlar= Departman::whereRaw('id!=?',array($id))->get();
    return view('departman_sil',array('departmanlar'=>$departmanlar,'id'=>$id,'departman'=>$departman));

}

public function departmanAtaveSil(Request $gelenler){

Departman::where('id','=',$gelenler->input('id'))->delete();

Personel::where('departman_id','=',$gelenler->input('id'))
            ->update(array('departman_id' => $gelenler->input('departman_id')));
	return redirect()->route('departmanlar');

}

}
