<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h3>Jenis Padi : {{$data->padi->jenis_padi}}</h3>
	<h3>Varietas : {{$data->padi->varietas}}</h3>
	<h3>Tanggal Panen : {{$data->tgl_panen}}</h3>
	<h3>Kondisi Gabah : {{$data->kondisi_gabah	}}</h3>
	<a href="{{route('a.i.ps.edit', ['id' => $data->id])}}">Tambah Rekomendasi</a>
	<br>
	<hr>
	<h2>Rekomendasi Penjadwalan</h2>
	<table border="1" width="70%" align="center">
		<thead>
			<th>No</th>
			<th>Nama Proses</th>
			<th>Tanggal</th>
			<th>Waktu</th>
			<th>Tips dan Trik</th>
			<th>#</th>
		</thead>
		<tbody>
			@forelse($data->penjadwalan as $index => $jadwal)
			<tr>
				<td>{{($index +1)}}</td>
				<td>{{$jadwal->nama_proses}}</td>
				<td>{{$jadwal->tanggal}}</td>
				<td>{{$jadwal->waktu}}</td>
				<td>{{$jadwal->tips_dan_trik}}</td>
				<td>
					<a href="{{route('a.i.ps.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])}}">Ubah</a>
				</td>
			</tr>
			@empty
				<h3>Belum ada rekomendasi penjadwalan</h3>
			@endforelse
		</tbody>
	</table>
	</center>
</body>
</html>