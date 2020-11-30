@extends('base')

@section('content')
<h3>Jenis Padi : {{$jenis_padi}}</h3>
<h3>Varietas : {{$varietas}}</h3>
<h3>Proses : {{$proses}}</h3>
<br>

<form action="{{route('p.i.tanam', ['varietas' => $varietas, 'jenis_padi' => $jenis_padi])}}" method="POST">
	@csrf
	@method('put')
	<div class="form-group">
		<label for="lokasi">Lokasi</label>
		<textarea class="form-control" id="lokasi" rows="3" name="lokasi" cols="30" rows="10">{{old('lokasi')}}</textarea>
	</div>
	@error('lokasi')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="luas_lahan">Luas Lahan</label>
	<input class="form-control py-4" id="luas_lahan" type="text" placeholder="luas lahan" name="luas_lahan" value="{{old('luas_lahan')}}"/>
	</div>
	@error('luas_lahan')
		<label>{{ucwords($message)}}</label>
	@enderror
	
	<div class="form-group">
		<label class="small mb-1" for="jenis_tanah">Jenis Tanah</label>
	<input class="form-control py-4" id="jenis_tanah" type="text" placeholder="jenis tanah" name="jenis_tanah" value="{{old('jenis_tanah')}}"/>
	</div>
	@error('jenis_tanah')
		<label>{{ucwords($message)}}</label>
	@enderror

	<div class="form-group">
		<label class="small mb-1" for="jenis_pupuk">Jenis Pupuk</label>
	<input class="form-control py-4" id="jenis_pupuk" type="text" placeholder="jenis pupuk" name="jenis_pupuk" value="{{old('jenis_pupuk')}}"/>
	</div>
	@error('jenis_pupuk')
		<label>{{ucwords($message)}}</label>
	@enderror

	<div class="form-group">
		<label class="small mb-1" for="ph_tanah">ph_tnah</label>
	<input class="form-control py-4" id="ph_tanah" type="text" placeholder="ph tanah" name="ph_tanah" value="{{old('ph_tanah')}}"/>
	</div>
	@error('ph_tanah')
		<label>{{ucwords($message)}}</label>
	@enderror

	<div class="form-group">
		<label class="small mb-1" for="kondisi_tanaman">Kondisi Tanaman</label>
	<input class="form-control py-4" id="kondisi_tanaman" type="text" placeholder="kondisi tanaman" name="kondisi_tanaman" value="{{old('kondisi_tanaman')}}"/>
	</div>
	@error('kondisi_tanaman')
		<label>{{ucwords($message)}}</label>
	@enderror

	<button class="btn btn-primary" type="submit">Submit</button>
</form>
@endsection