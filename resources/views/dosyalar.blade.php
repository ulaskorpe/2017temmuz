@extends('index')

@section('goster')



<div class="container">
<div class="panel panel-default">
<div class="panel-heading" style="height: 50px;"></div>
<div class="panel-heading"><h3>Personel Dosyaları</h3></div>

<div class="panel-heading" style="height: 50px;">

<select name="personel_id" id="personel_id" class="form-control" onchange="window.open('{{url('/dosyalar')}}/'+this.value,'_self');">
	
<option value="">Personel Seçiniz </option>
@foreach($personel as $person)
	<option value="{{$person->id}}" @if($person->id===$personel_id) selected='true' @endif>


	{{$person->adi_soyadi}} [{{$person->getDepartman()}}]  </option>
@endforeach
</select>


</div>
<div class="panel-body">
<div class="panel-heading"><hr></div>


<table class="table table-bordered">
<tr>
	<th>Dosya Adı</th>
	<th>Personel</th>
	<th>Açıklama</th>
	<th>Tarih</th>
</tr>

@foreach($dosyalar as $dosya)
	<tr>
	<td>{{ $dosya->dosya }}</td>
	<td>{{ $dosya->getPersonel() }}</td>
	<td> {{$dosya->aciklama}}</td>
	<td>{{ $dosya->tarih }}</td>
	<td>

<button class="btn btn-danger" onclick="if(confirm('kayıt silinecek?')){ window.open('{{url('/dosyalar/sil/'.$dosya->id)}}','_self'); }">Sil</button>



<button class="btn btn-warning" onclick="window.open('{{url('/personel_dosyalar/'.$dosya->dosya)}}','_blank');">Dosya İndir</button>
</td>
	</tr>
		@endforeach

</table>


<div class="panel-heading"><hr></div>

<div class="panel-heading"><h3>Dosya Yükleme Formu</h3></div>

<form class="form-horizontal" action="{{url('/dosyaYukle')}}" method="Post" id="upload" enctype="multipart/form-data">
	
{{ csrf_field() }}

<div class="form-group">

<select name="personel_id" id="personel_id" class="form-control">
<option value="">Personel Seçiniz </option>
@foreach($personel as $person)
	<option value="{{$person->id}}">


	{{$person->adi_soyadi}} [{{$person->getDepartman()}}]  </option>
@endforeach
</select>

@if($errors->has('personel_id'))
	{{ $errors->first('personel_id') }}
@endif 
</div>

<div class="form-group">
<input type="text" name="aciklama" class="form-control" id="aciklama" placeholder="Açıklama" value="">

@if($errors->has('aciklama'))
	{{ $errors->first('aciklama') }}
@endif 
</div>

<div class="form-group">
<input type="file" name="dosyalar[]" class="form-control" id="file[]" placeholder="dosyalar" value="" multiple>

@if($errors->has('dosyalar[]'))
	{{ $errors->first('dosyalar[]') }}
@endif 
</div>


<input type="submit" name="ekle" id="ekle" class="btn btn-primary" value="Dosya Yükle">



</form>

<script type="text/javascript">
	/*
var form = documentGetElementById('upload');
var request = new XMLHttpRequest;
form.addEventListener('submir',function(e){

	e.preventDefault();
	var formdata = new FormData(form);

	request.open('post','/dosyaYukle');
	request.addEventListener("load",transferComplete());
	request.send(formdata);

});


function transferComplete(data){
  console.log(data.currentTarget.response);
}*/
</script>


</div>
</div>
</div>



@endsection