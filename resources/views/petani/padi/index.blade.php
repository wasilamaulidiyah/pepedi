@extends('base')

@section('content')

<div class="card mb-4">
    <div class="card-header">
    <a class="btn btn-primary" href="{{route('p.padi.create')}}">Tambah Padi</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>No</th>
                    <th>Jenis</th>
                    <th>Varietas</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach($data as $i => $data)
                    @php
                    $routes;
                    $thisID;
                    if(count($data->pratanam)!=0){
                        $routes = 'pra.show';
                        $thisID = $data->pratanam[0]->id;
                    }elseif(count($data->pascatanam)!=0){
                        $routes = 'ps.show';
                        $thisID = $data->pascatanam[0]->id;
                    }elseif(count($data->tanam)!=0){
                        $routes = 'in.show';
                        $thisID = $data->tanam[0]->id;                        
                    }else{
                        $routes = 'error';
                    }
                    @endphp
                    @if($routes != 'error')
                    <tr>
                        <td>{{($i+1)}}</td>
                        <td>{{$data->jenis_padi}}</td>
                        <td>{{$data->varietas}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('p.i.'.$routes, ['id' => $thisID])}}">
                                Detail
                            </a>
                            <!-- <a class="btn btn-warning" href="{{route('p.padi.edit', ['id' => $data->id])}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('p.padi.delete', ['id' => $data->id])}}"> Delete</a>-->
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection
