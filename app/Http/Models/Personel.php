<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Departman;
class Personel extends Model
{

public function getDepartman(){
    return Departman::where('id',$this->departman_id)->first()->departman_adi;
}
/*
public function departman(){
	return $this->belongsTo('Departman');
}*/

  protected $table = 'personel';
  protected $fillable = ['adi_soyadi','gorevi','giris_tarihi','departman_id'];
}
