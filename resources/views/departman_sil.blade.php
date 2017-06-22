@extends('index')

@section('goster')


<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Silinecek departman : {{$departman->departman_adi}}</h3></div>
<div class="panel-heading"><h3>Departman silmeden önce bağlı personeli atayacağınız "Departman" seçin</h3></div>

<div class="panel-body">





<form class="form-horizontal" action="{{url('/departmanAtaveSil')}}" method="Post">
<input type="hidden" name="id" id="id" value="<?=$id;?>">
{{ csrf_field() }}


<div class="form-group">
<select name="departman_id" id="departman_id" class="form-control">
	
<option value="">Departman Seçiniz</option>
@foreach($departmanlar as $departman)
	<option value="{{$departman->id}}" >{{$departman->departman_adi}}  </option>
@endforeach
</select>
</div>

<input type="submit" name="ekle" id="ekle" class="btn btn-primary" value="Personeli Ata ve Departmanı Sil">
<input type="button" name="geri" id="geri" class="btn btn-warning" value="Geri Dön" onclick="window.open('{{url('/departmanlar')}}','_self');">
</form>


</div>
</div>
</div>

@endsection