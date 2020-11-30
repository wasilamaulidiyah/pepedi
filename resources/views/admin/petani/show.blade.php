@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            {{-- <h2>{{$data}}</h2> --}}
            <table style="width:100%">
                <tr>
                  <th>Nama</th>
                  <td>{{$data->name}}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{$data->email}}</td>
                </tr>
                <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{$data->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{$data->alamat}}</td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td>{{$data->pekerjaan}}</td>
                </tr>
                <tr>
                    <th>Role</th>
                    <td>{{$data->role}}</td>
                  </tr>
              </table>
        </div>
    </div>
</div>
@endsection