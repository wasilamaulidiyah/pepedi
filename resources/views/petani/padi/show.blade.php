{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>{{$data->jenis_padi}}</h2>
	<h2>{{$data->varietas}}</h2>
</body>
</html> --}}

@extends('base')

@section('content')
	
	<h2>Jenis {{$data->jenis_padi}}</h2>
	<h2>Varietas {{$data->varietas}}</h2>
@endsection