 @extends('base')

 @section('content')
 <form action="{{route('p.padi.store')}}" method="POST">
	@csrf
		<div class="form-group">
			<label class="small mb-1" for="padi">Jenis Padi</label>
		<input class="form-control py-4" id="padi" type="text" placeholder="Jenis Padi" name="jenis_padi" value="{{old('jenis_padi')}}"/>
		</div>
		@error('jenis_padi')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		
		<div class="form-group">
			<label class="small mb-1" for="varietas">Varietas</label>
		<input class="form-control py-4" id="varietas" type="text" placeholder="Varietas" name="varietas" value="{{old('varietas')}}"/>
		</div>
		@error('varietas')
		<small class="text-danger">
			{{ ucwords($message) }}
		</small>
		@enderror
		<br>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
 @endsection