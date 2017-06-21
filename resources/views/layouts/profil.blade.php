@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">

<div class="panel-heading"><h3>Bilgileriniz</h3></div>

<div class="panel-body">



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

</form>

</div>
</div>
</div>

@endsection