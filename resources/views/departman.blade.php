@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Departmanlar</h3></div>

<div class="panel-body">


<table class="table table-bordered">
<tr>
	<th>Departman</th>
	<th>Kuruluş Tarihi</th>
</tr>

@foreach($departmanlar as $departman)
	<tr>
	<td>{{ $departman->departman_adi }}</td>

	<td>{{ $departman->kurulus_tarihi }}</td>
	<td>
<button class="btn btn-danger" onclick="window.open('{{url('/departmanlar/sil/'.$departman->id)}}','_self');">Sil</button>
<button class="btn btn-warning" onclick="window.open('{{url('/departmanlar/guncelle/'.$departman->id)}}','_self');">Güncelle</button>
	</td>
	</tr>
		@endforeach

</table>



@if(isset($seciliDepartman))  

<?php 

///  güncelle kısmı
$departman_adi=$seciliDepartman->departman_adi;
$kurulus_tarihi=$seciliDepartman->kurulus_tarihi;
$ex='Güncelle';
$id=$seciliDepartman->id;
$baslik="Departman Güncelle";
?>


@else
<?php 
$departman_adi='';
$kurulus_tarihi='';


$ex='Ekle';
$id='';
$baslik="Yeni Departman";
?>


@endif


<form class="form-horizontal" action="{{url('/departmanIslem')}}" method="Post">
	<input type="hidden" name="id" id="id" value="<?=$id;?>">
{{ csrf_field() }}
<div class="panel-heading"><h3><?=$baslik?></h3></div>
<?php
$dizi=array('departman_adi','kurulus_tarihi');
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

@if(isset($seciliDepartman))  
<input type="button" onclick="window.open('{{url('/departmanlar')}}','_self');" class="btn btn-warning" value="Yeni Kayıt">

@endif


</form>


</div>
</div>
</div>

@endsection