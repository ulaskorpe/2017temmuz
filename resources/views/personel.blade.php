@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Personel Listesi</h3></div>

<div class="panel-body">

<table class="table table-bordered">
<tr>
	<th>Adı Soyadı</th>
	<th>Görevi</th>
	
	<th>Departmanı</th>
	<th>Giriş Tarihi</th>
</tr>

@foreach($personel as $person)
	<tr>
	<td>{{ $person->adi_soyadi }}</td>
	<td>{{ $person->gorevi }}</td>
	<td>{{ $person->departman_id }}</td>
	<td>{{ $person->giris_tarihi }}</td>
	<td>
<button class="btn btn-danger" onclick="if(confirm('kayıt silinecek?')){ window.open('{{url('/personel/sil/'.$person->id)}}','_self'); }">Sil</button>
<button class="btn btn-warning" onclick="window.open('{{url('/personel/guncelle/'.$person->id)}}','_self')">Güncelle</button>
	</td>
	</tr>
		@endforeach

</table>


@if(isset($seciliPersonel))  

<?php 

///  güncelle kısmı
$adi_soyadi=$seciliPersonel->adi_soyadi;
$gorevi=$seciliPersonel->gorevi;
$departman_id=$seciliPersonel->departman_id;
$giris_tarihi=$seciliPersonel->giris_tarihi;
$ex='Güncelle';
$id=$seciliPersonel->id;
?>


@else
<?php 
$adi_soyadi='';
$gorevi='';
$departman_id='';
$giris_tarihi='';


$ex='Ekle';
$id='';
?>


@endif


<form class="form-horizontal" action="{{url('/personelIslem')}}" method="Post">
	<input type="hidden" name="id" id="id" value="<?=$id?>">
{{ csrf_field() }}
<div class="panel-heading"><h3>Yeni Personel</h3></div>
<?php
$dizi=array('adi_soyadi','gorevi','giris_tarihi','departman_id');
foreach($dizi as $alan){
?>
<div class="form-group">

<input type="text" name="<?=$alan;?>" class="form-control" id="<?=$alan;?>" placeholder="<?=$alan;?>" value="<?=$$alan;?>">

@if($errors->has($alan))
	{{ $errors->first($alan) }}
@endif 
</div>
<?php }?>

<input type="submit" name="ekle" id="ekle" class="btn btn-primary" value="<?=$ex;?>">

@if(isset($seciliPersonel))  
<input type="button" onclick="window.open('{{url('/personel')}}','_self');" class="btn btn-warning" value="Yeni Kayıt">

@endif


</form>

</div>
</div>
</div>

@endsection