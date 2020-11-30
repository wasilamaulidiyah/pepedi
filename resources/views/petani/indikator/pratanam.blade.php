@extends('base')

@section('content')
<h3>Jenis Padi : {{$jenis_padi}}</h3>
<h3>Varietas : {{$varietas}}</h3>
<h3>Proses : {{$proses}}</h3>
<br>

<form action="{{route('p.i.pratanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])}}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label class="small mb-1" for="tgl_persemaian">Tanggal Persemaian</label>
	<input class="form-control py-4" id="tgl_persemaian" type="date" placeholder="tanggal" name="tgl_persemaian" value="{{old('tgl_persemaian')}}"/>
	</div>
	@error('tgl_persemaian')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="banyak_benih">Banyak Benih</label>
	<input class="form-control py-4" id="banyak_benih" type="number" placeholder="banyak benih" name="banyak_benih" value="{{old('banyak_benih')}}"/>
	</div>
	@error('banyak_benih')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="jenis_tanah">Jenis Tanah</label>
	<input class="form-control py-4" id="banyak_benih" type="text" placeholder="jenis tanah" name="jenis_tanah" value="{{old('jenis_tanah')}}"/>
	</div>
	@error('jenis_tanah')
		<label>{{ucwords($message)}}</label>
	@enderror

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection