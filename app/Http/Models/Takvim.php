<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Takvim extends Model
{
  protected $table = 'takvim';
  protected $fillable = ['gun','ay','yil','hafta','hafta_gun'];
}
