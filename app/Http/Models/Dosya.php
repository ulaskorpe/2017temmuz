<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Personel;
class Dosya extends Model
{
    
public function getPersonel(){
    return personel::where('id',$this->personel_id)->first()->adi_soyadi;
}
/*
public function departman(){
	return $this->belongsTo('Departman');
}*/

  protected $table = 'dosyalar';
  protected $fillable = ['aciklama','dosya','personel_id','tarih'];
}
