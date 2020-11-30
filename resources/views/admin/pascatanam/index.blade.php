<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table width="70%" border="1">
			<thead>
				<th>No</th>
				<th>Nama</th>
				<th>Varietas</th>
				<th>Tanggal Persemaian</th>
				<th>Banyak Benih</th>
				<th>Jenis Tanah</th>
				<th>#</th>
			</thead>
			<tbody>
				@foreach($data as $index => $data)
				<tr>
					<td>{{($index + 1)}}</td>
					<td>{{$data->padi->jenis_padi}}</td>
					<td>{{$data->padi->varietas}}</td>
					<td>{{$data->tgl_persemaian}}</td>
					<td>{{$data->banyak_benih}}</td>
					<td>{{$data->jenis_tanah}}</td>
					<td>
						<a href="{{route('a.i.ps.show', ['id' => $data->id])}}">Detail</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</center>
</body>
</html>