<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Models\Personel;
use App\Http\Models\Dosya;
use Storage;
use File;	
class dosyaController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}

  public function dosyalar($personel_id=0){
  	Session::put('sayfa',3);


 $personel=Personel::whereRaw('id!=?',array(0))->orderBy('adi_soyadi')->get();
 if($personel_id>0){
	$dosyalar= Dosya::whereRaw('personel_id=?',array($personel_id))->orderBy('created_at','desc')->get();
 }else{
 	$dosyalar= Dosya::whereRaw('id!=?',array(0))->orderBy('created_at','desc')->get();
 }
	
   return view('dosyalar',array('dosyalar'=>$dosyalar,'personel'=>$personel,'personel_id'=>$personel_id));
  }///dosyalar


function uzantiBul($dosya){
	$dizi=explode(".",$dosya);
	return strtolower($dizi[count($dizi)-1]);

}

public function dosyaYukle(Request $gelenler){
Session::put('sayfa',3);

$izinliDizi=array('doc','docx','xls','xlsx','pdf','txt');

$personel_id = $gelenler->input('personel_id');
$aciklama = (!empty($gelenler->input('aciklama')))?$gelenler->input('aciklama'):date('d.m.Y').' tarihli dosya';

$dizi=array();
	
	$dosyalar=$gelenler->file('dosyalar');
	if(!empty($dosyalar)){
		foreach($dosyalar as $dosya){
			$dosya_adi=$dosya->getClientOriginalName();
			$uzanti=$this->uzantiBul($dosya_adi);
			if(in_array($uzanti,$izinliDizi)){
			Storage::put($dosya_adi,file_get_contents($dosya));
			Dosya::insert(['aciklama' =>$aciklama, 'dosya' => $dosya_adi,'personel_id'=>$personel_id,'tarih'=>date('d.m.Y H:i')]);
			}///izinli
	}///foreach
	}////!empty

$personel=Personel::whereRaw('id!=?',array(0))->orderBy('adi_soyadi')->get();

$dosyalar= Dosya::whereRaw('personel_id=?',array($personel_id))->orderBy('created_at','desc')->get();
 	
return view('dosyalar',array('dosyalar'=>$dosyalar,'personel'=>$personel,'personel_id'=>$personel_id));

}////dosyaYukle fx



public function dosyaSil($id=0){
	$silinecek=Dosya::whereRaw('id=?',array($id))->first();
	//return url('/')."/perso".$silinecek->dosya;
	//return $silinecek->id;
	unlink(public_path().'\personel_dosyalar\\'.$silinecek->dosya);


Dosya::where('id','=',$id)->delete();

$personel=Personel::whereRaw('id!=?',array(0))->orderBy('adi_soyadi')->get();

$dosyalar= Dosya::whereRaw('id!=?',array(0))->orderBy('id','desc')->get();
 	
return view('dosyalar',array('dosyalar'=>$dosyalar,'personel'=>$personel,'personel_id'=>0));

}

}///class
