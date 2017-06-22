@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">



<div class="panel-body">

<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Bilgileriniz</h3></div>
<form class="form-horizontal" action="{{url('/profilUpdate')}}" method="Post">
	
{{ csrf_field() }}

<?php
$dizi=array('name','email');
foreach($dizi as $alan){
?>
<div class="form-group">

<input type="text" name="<?=$alan;?>" id="<?=$alan;?>" placeholder="<?=$alan;?>" value="{{Auth::user()->$alan}}">
</div>
<?php }?>


<input type="submit" name="update" id="update" class="btn btn-primary" value="Güncelle">

</form>


<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Şifre Güncelle</h3></div>


<form class="form-horizontal" action="{{url('/profilSifre')}}" method="Post">
	
{{ csrf_field() }}

<?php
$dizi=array('eski_sifre','sifre','sifre_yeniden');
foreach($dizi as $alan){
?>
<div class="form-group">

<input type="text" name="<?=$alan;?>" id="<?=$alan;?>" placeholder="<?=$alan;?>" value="">
</div>
<?php }?>


<input type="submit" name="update" id="update" class="btn btn-primary" value="Güncelle">
</form>

</div>
</div>
</div>

@endsection