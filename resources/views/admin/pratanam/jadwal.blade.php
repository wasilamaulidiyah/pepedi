<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<form action="{{route('a.i.pr.update', ['id' => $data->id])}}" method="POST">
		@csrf
		@method('put')	
			<br><br>
			<label>Nama Proses</label>
			<br>
			<input type="text" value="{{old('nama_proses')}}" name="nama_proses">
			<br>
			@error('nama_proses')
				<label>{{ucwords($message)}}</label>
			@enderror
			<br>
			<label>Tanggal</label>
			<input type="date" name="tanggal" value="{{old('tanggal')}}">
			<br>
			@error('tanggal')
				<label>{{ucwords($message)}}</label>
			@enderror
			<br>

			<label>Waktu</label>
			<input type="time" name="waktu" value="{{old('waktu')}}">
			<br>
			@error('waktu')
				<label>{{ucwords($message)}}</label>
			@enderror
			<br>
			<label>Tips dan Trik</label>
			<br>
			<textarea name="tips_dan_trik" cols="30" rows="10">{{old('tips_dan_trik')}}</textarea>
			<br>
			@error('tips_dan_trik')
				<label>{{ucwords($message)}}</label>
			@enderror
			<br>
			<button type="submit">
				Submit
			</button>
		</form>
	</center>
</body>
</html>