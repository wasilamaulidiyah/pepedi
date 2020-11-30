 @extends('base')

 @section('content')
 <form action="{{route('p.padi.store.proses', ['jenis_padi' => $jenis_padi, 'varietas' => $varietas])}}" method="POST">
 	@method('put')
	@csrf
		<br>
		<div class="form-group">
			<label class="small mb-1" for="proses">Proses</label>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r1" value="Pra-Tanam">
			  <label class="form-check-label" for="r1">
			    Pra-Tanam
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r2" value="Tanam">
			  <label class="form-check-label" for="r2">
			    Tanam
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="proses" id="r3" value="Pasca-Tanam">
			  <label class="form-check-label" for="r3">
			    Pasca-Tanam
			  </label>
			</div>
			<!-- <input class="form-control py-4" id="proses" type="text" placeholder="Varietas" name="varietas" value="{{old('proses')}}"/> -->
		</div>
		@error('proses')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection