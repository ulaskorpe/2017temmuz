<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Departman extends Model
{
      protected $table = 'departman';
 	  protected $fillable = ['departman_adi','kurulus_tarihi'];
}
