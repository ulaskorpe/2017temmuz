@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Personel İzinleri</h3></div>

<div class="panel-heading" style="height: 50px;">

<select name="personel_id" id="personel_id" class="form-control" onchange="window.open('{{url('/izinler')}}/'+this.value,'_self');">
	
<option value="">Personel Seçiniz </option>
@foreach($personel as $person)
	<option value="{{$person->id}}" <?php if(intval($person->id) === intval($personel_id)){?> selected="true" <?php }?>>
		{{$person->adi_soyadi}} [{{$person->getDepartman()}}]  </option>
@endforeach
</select>


</div>
<div class="panel-body">
<div class="panel-heading"><hr></div>

<?php


function tarihYap($tarih,  $aylar ){

$gun=intval(substr($tarih,-2));
$ay=intval(substr($tarih,4,2));

return   $gun.".".$aylar[$ay].".".substr($tarih,0,4);
//return $aylar;
}
?>


<table class="table table-bordered">
<tr>
	<th>Başlangıç</th>
	<th>Bitiş</th>
	<th>Personel</th>
	<th>Açıklama</th>
</tr>


@foreach($izinler as $izin)
	<tr>
	<td>{{ tarihYap($izin->baslangic,$aylar) }}</td>
	<td>{{ tarihYap($izin->bitis,$aylar) }}</td>
	<td>{{ $izin->getPersonel() }}</td>
	<td> {{$izin->aciklama}}</td>
	
	<td>
<button class="btn btn-danger" onclick="if(confirm('kayıt silinecek?')){ window.open('{{url('/izinler/sil/'.$izin->id)}}','_self'); }">Sil</button>
<button class="btn btn-warning" onclick="window.open('{{url('/izinler/guncelle/'.$izin->id)}}','_self')">Güncelle</button>
</td>
	</tr>
		@endforeach

</table>


@if(!empty($seciliIzin))
<?php
$baslik="Güncelleme";
$ex="Güncelle";
$id=$seciliIzin->id;
$aciklama=$seciliIzin->aciklama;
$p_id=$seciliIzin->personel_id;
$seciliIzin_baslangic=$seciliIzin->baslangic;
$seciliIzin_bitis=$seciliIzin->bitis;
?>
@else
<?php
$baslik="Ekleme";
$ex="Ekle";
$id=0;
$aciklama='';
$p_id=0;
$seciliIzin_baslangic=0;
$seciliIzin_bitis=0;
?>

@endif




<div class="panel-heading"><hr></div>

<div class="panel-heading"><h3>İzin {{$baslik}} Formu</h3></div>

@if(!empty(Session::get('izinHata')))
<div class="panel-heading">{{Session::get('izinHata')}}</div>
{{Session::put('izinHata','')}}
@endif

<form class="form-horizontal" action="{{url('/izinIslem')}}" method="Post">
	
{{ csrf_field() }}
<input type="hidden" name="id" id="id" value="<?=$id;?>">
<div class="form-group">

<select name="personel_id" id="personel_id" class="form-control">
<option value="">Personel Seçiniz </option>
@foreach($personel as $person)
	<option value="{{$person->id}}" <?php if(intval($person->id) === intval($p_id)){?> selected="true" <?php }?> >
	{{$person->adi_soyadi}} [{{$person->getDepartman()}}]    </option>
@endforeach
</select>

@if($errors->has('personel_id'))
	{{ $errors->first('personel_id') }}
@endif 
</div>


<div class="form-group">

<select name="baslangic" id="baslangic" class="form-control">
<option value="">Başlangıç Tarihi </option>
@foreach($takvim as $tx)

<?php

$value=$tx->yil.(($tx->ay)<10?'0'.$tx->ay:$tx->ay).(($tx->gun)<10?'0'.$tx->gun:$tx->gun);
?>

	<option value="{{$value}}" <?php if(intval($value)===intval($seciliIzin_baslangic)){?> selected="true" <?php }?>>
	{{$tx->gun}}  {{ $aylar[$tx->ay]}} {{$tx->yil}} {{$hafta[$tx->hafta_gun]}}  
	</option>
@endforeach
</select>

@if($errors->has('baslangic'))
	{{ $errors->first('baslangic') }}
@endif 
</div>



<div class="form-group">

<select name="bitis" id="bitis" class="form-control">
<option value="">Bitiş Tarihi </option>
@foreach($takvim as $tx)
<?php

$value=$tx->yil.(($tx->ay)<10?'0'.$tx->ay:$tx->ay).(($tx->gun)<10?'0'.$tx->gun:$tx->gun);
?>
	<option value="{{$value}}" <?php if(intval($value)===intval($seciliIzin_bitis)){?> selected="true" <?php }?>>
	{{$tx->gun}}  {{ $aylar[$tx->ay]}} {{$tx->yil}} {{$hafta[$tx->hafta_gun]}}  </option>
@endforeach
</select>

@if($errors->has('bitis'))
	{{ $errors->first('bitis') }}
@endif 
</div>

<div class="form-group">
<input type="text" name="aciklama" class="form-control" id="aciklama" placeholder="Açıklama" value="{{$aciklama}}">

@if($errors->has('aciklama'))
	{{ $errors->first('aciklama') }}
@endif 
</div>



<input type="submit" name="ekle" id="ekle" class="btn btn-primary" value="İzin {{$ex}}">

@if(isset($seciliIzin))  
<input type="button" onclick="window.open('{{url('/izinler')}}','_self');" class="btn btn-warning" value="Yeni Kayıt">

@endif

</form>




</div>
</div>
</div>



@endsection