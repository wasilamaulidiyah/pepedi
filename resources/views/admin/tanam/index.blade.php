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
				<th>lokasi</th>
				<th>luas_lahan</th>
				<th>jenis_tanah</th>
				<th>jenis_pupuk</th>
				<th>ph_tanah</th>
				<th>kondisi_tanaman</th>
				<th>#</th>
			</thead>
			<tbody>
				@foreach($data as $index => $data)
				<tr>
					<td>{{($index + 1)}}</td>
					<td>{{$data->padi->jenis_padi}}</td>
					<td>{{$data->padi->varietas}}</td>
					<td>{{$data->lokasi}}</td>
					<td>{{$data->luas_lahan}}</td>
					<td>{{$data->jenis_tanah}}</td>
					<td>{{$data->jenis_pupuk}}</td>
					<td>{{$data->ph_tanah}}</td>
					<td>{{$data->kondisi_tanaman}}</td>
					<td>
						<a href="{{route('a.i.tn.show', ['id' => $data->id])}}">Detail</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</center>
</body>
</html>