@extends('base')

@section('content')
<h3>Jenis Padi : {{$jenis_padi}}</h3>
<h3>Varietas : {{$varietas}}</h3>
<h3>Proses : {{$proses}}</h3>
<br>

<form action="{{route('p.i.pascatanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])}}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label class="small mb-1" for="tgl_panen">Tanggal Panen</label>
		<input class="form-control py-4" id="tgl_panen" type="date" placeholder="tgl_panen" name="tgl_panen" value="{{old('tgl_panen')}}"/>
	</div>
	@error('tgl_panen')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="kondisi_gabah">Kondisi gabah</label>
		<input class="form-control py-4" id="kondisi_gabah" type="text" placeholder="Kondisi gabah" name="kondisi_gabah" value="{{old('kondisi_gabah')}}"/>
	</div>
	@error('kondisi_gabah')
		<label>{{ucwords($message)}}</label>
	@enderror

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection