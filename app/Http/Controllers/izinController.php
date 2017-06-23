<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Personel;
use App\Http\Models\Izin;
use App\Http\Models\Takvim;
use Session;
use Validator;


class izinController extends Controller
{

public function __construct(){
  $this->middleware('auth');
}

public 	$hafta=array('0','Pazartesi','Salı','Çarşamba','Perşembe','Cuma','Cumartesi','Pazar');
public 	$aylar=array('0','Ocak','Şubat','Mart','Nisan','Mayıs','Haziran','Temmuz','Ağustos','Eylül','Ekim','Kasım','Aralık');


 public function izinler($personel_id=0){
 	Session::put('sayfa',4);

 	$personel=Personel::whereRaw('id!=?',array(0))->orderBy('adi_soyadi')->get();

 	if($personel_id>0){
 	$izinler=Izin::whereRaw('personel_id=?',array($personel_id))->orderBy('baslangic')->get();
 }else{
 	$izinler=Izin::whereRaw('id!=?',array(0))->orderBy('baslangic')->get();
 	
 }
 	$bugun=Takvim::whereRaw('gun=? and ay=? and yil=?',array(intval(date('d')),intval(date('m')),date('Y')))->first();

 	$bitis=Takvim::whereRaw('gun=? and ay=? and yil=?',array(intval(date('d')),intval(date('m')),date('Y')+1))->first();

 	$takvim=Takvim::whereRaw('id>=? AND id<=?',array($bugun->id,$bitis->id))->orderBy('id')->get();
  	return view('izinler',array('personel'=>$personel,'personel_id'=>$personel_id,'izinler'=>$izinler,'takvim'=>$takvim,'hafta'=>$this->hafta,'aylar'=>$this->aylar));
  }





public function izinIslem(Request $gelenler){
Session::put('sayfa',4);

$kontrol = Validator::make($gelenler->all(),array(

    'personel_id'=>'required|numeric','baslangic'=>'required|numeric','bitis'=>'required|numeric'

  ));

if($kontrol->fails()){
  return redirect()->to('/izinler')->withErrors($kontrol)->withInput();
}else{///başarılı
$hata='';
if(intval($gelenler->input('bitis')) < intval($gelenler->input('baslangic'))){
	$hata = 'Bitiş tarihi başlangıçtan önce olamaz';
}


if(empty($gelenler->id)){
$varmi = Izin::whereRaw('(baslangic>=? and bitis<=?) and personel_id=?',array($gelenler->baslangic,$gelenler->bitis,$gelenler->personel_id))->first();
}else{
$varmi = Izin::whereRaw('(baslangic>=? and bitis<=?) and personel_id=? and id!=?',array($gelenler->baslangic,$gelenler->bitis,$gelenler->personel_id,$gelenler->id))->first();

}

if(!empty($varmi->id)){
	$hata='Personelin seçili tarihler arasında izni mevcut';
}




if(empty($hata)){


if(empty($gelenler->id)){
	Izin::create(array(
  'aciklama'=>$gelenler->input('aciklama'),
  'baslangic'=>$gelenler->input('baslangic'),
  'bitis'=>$gelenler->input('bitis'),
  'personel_id'=>$gelenler->input('personel_id')
  ));

}else{


$izin=Izin::find($gelenler->input('id'));


$izin->personel_id=$gelenler->input('personel_id');
$izin->baslangic=$gelenler->input('baslangic');
$izin->bitis=$gelenler->input('bitis');
$izin->aciklama=$gelenler->input('aciklama');
$izin->save();


}

}///hata yok

Session::put('izinHata',$hata);

//return $gelenler->baslangic.":".$gelenler->bitis;
//$izindemi=Izin::whereRaw('')

return redirect()->route('izinler');


}//başarılı


}////izinislem


public function izinGuncelle($id=0){
Session::put('sayfa',4);

$izin=Izin::find($id);








 	$personel=Personel::whereRaw('id!=?',array(0))->orderBy('adi_soyadi')->get();
 	$izinler=Izin::whereRaw('id!=?',array(0))->orderBy('baslangic')->get();
 	$bugun=Takvim::whereRaw('gun=? and ay=? and yil=?',array(intval(date('d')),intval(date('m')),date('Y')))->first();
 	$bitis=Takvim::whereRaw('gun=? and ay=? and yil=?',array(intval(date('d')),intval(date('m')),date('Y')+1))->first();
 	$takvim=Takvim::whereRaw('id>=? AND id<=?',array($bugun->id,$bitis->id))->orderBy('id')->get();
  	return view('izinler',array('personel'=>$personel,'personel_id'=>0,'izinler'=>$izinler,'takvim'=>$takvim,'hafta'=>$this->hafta,'aylar'=>$this->aylar,'seciliIzin'=>$izin));


}///izinGuncelle


public function izinSil($id=0){
Session::put('sayfa',4);
Izin::where('id','=',$id)->delete();
return redirect()->route('izinler');


}

}///class
