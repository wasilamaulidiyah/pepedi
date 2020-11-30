<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h3>Jenis Padi : {{$data->padi->jenis_padi}}</h3>
	<h3>Varietas : {{$data->padi->varietas}}</h3>
	<h3>lokasi : {{$data->lokasi}}</h3>
	<h3>luas_lahan : {{$data->luas_lahan}}</h3>
	<h3>jenis_tanah : {{$data->jenis_tanah}}</h3>
	<h3>jenis_pupuk : {{$data->jenis_pupuk}}</h3>
	<h3>ph_tanah : {{$data->ph_tanah}}</h3>
	<h3>kondisi_tanaman : {{$data->kondisi_tanaman}}</h3>

	<a href="{{route('a.i.tn.edit', ['id' => $data->id])}}">Tambah Rekomendasi</a>
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
					<a href="{{route('a.i.tn.ubah.jadwal', ['id' => $data->id, 'idjadwal' => $jadwal->id])}}">Ubah</a>
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