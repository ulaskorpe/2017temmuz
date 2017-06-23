<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Personel;
class Izin extends Model
{    
public function getPersonel(){
    return personel::where('id',$this->personel_id)->first()->adi_soyadi;
}


/*
public function departman(){
	return $this->belongsTo('Departman');
}*/

  protected $table = 'izinler';
  protected $fillable = ['aciklama', 'personel_id','baslangic','bitis'];
}
