<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('p.padi.update', ['id' => $data->id])}}" method="POST">
	@csrf
	@method('put')
		<br>
		<input type="text" placeholder="Jenis Padi" name="jenis_padi" value="{{$data->jenis_padi}}">
		@error('jenis_padi')
		<br>
		<span>
			{{ ucwords($message) }}
		</span>
		@enderror
		<br>
		<input type="text" placeholder="Varietas" name="varietas" value="{{$data->varietas}}">
		@error('varietas')
		<br>
		<span>
			{{ ucwords($message) }}
		</span>
		@enderror
		<br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>