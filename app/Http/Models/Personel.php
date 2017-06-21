<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
  protected $table = 'personel';
  protected $fillable = ['adi_soyadi','gorevi','giris_tarihi','departman_id'];
}
