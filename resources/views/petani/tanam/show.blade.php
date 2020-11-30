@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        Hasil Rekomendasi Penjadwalan
    </div>
    <div class="card-body col-md-12">
        <div class="row justify-content-md-center">
            <table class="table table-bordered table-stripped text-center col-md-7">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>{{$data->padi->jenis_padi}}</td>
                    </tr>
                    <tr>
                        <td>Varietas</td>
                        <td>{{$data->padi->varietas}}</td>
                    </tr>
                    <tr>
                        <td>lokasi</td>
                        <td>{{$data->lokasi}}</td>
                    </tr>
                    <tr>
                        <td>luas_lahan</td>
                        <td>{{$data->luas_lahan}}</td>
                    </tr>
                    <tr>
                        <td>jenis_tanah</td>
                        <td>{{$data->jenis_tanah}}</td>
                    </tr>
                    <tr>
                        <td>jenis_pupuk</td>
                        <td>{{$data->jenis_pupuk}}</td>
                    </tr>
                    <tr>
                        <td>ph_tanah</td>
                        <td>{{$data->ph_tanah}}</td>
                    </tr>
                    <tr>
                        <td>kondisi_tanaman</td>
                        <td>{{$data->kondisi_tanaman}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <table class="table table-bordered table-stripped text-center">
            <thead>
                <th>No</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nama Proses</th>
                <th>Tips dan Trik</th>
                
            </thead>
            <tbody>
                @forelse($data->penjadwalan as $index => $jadwal)
                <tr>
                    <td>{{($index+1)}}</td>
                    <td>{{$jadwal->tanggal}}</td>
                    <td>{{$jadwal->waktu}}</td>
                    <td>{{$jadwal->nama_proses}}</td>
                    <td>{{$jadwal->tips_dan_trik}}</td>
                    
                </tr>
                @empty
                <tr>
                    <td colspan="5">Belum ada saran</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection