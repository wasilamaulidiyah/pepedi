@extends('base')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <form action="{{route('a.petani.update', ['id' => $data->id])}}" method="POST">
                @method('put')
                @csrf
                <br>
                    
                <div class="form-group">
                    <label class="small mb-1" for="nam">Nama Lengkap</label>
                    <input class="form-control py-4" id="name" type="text" placeholder="Nama Lengkap" name="name" value="{{$data->name}}"/>
                </div>
                @error('name')
                <br>
                <span>
                    {{ ucwords($message) }}
                </span>
                @enderror
                    <br>
                    <div class="form-group">
                        <label class="small mb-1" for="inputEmailAddress">No Hp</label>
                        <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="No HP" name="nohp" value="{{$data->nohp}}"/>
                    </div>
                    @error('nohp')
                    <br>
                    <span>
                        {{ ucwords($message) }}
                    </span>
                    @enderror
                    <br>

                    <div class="form-group">
                        <label class="small mb-1" for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control py-4" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki" {{$data->jenis_kelamin=='laki-laki' ? 'selected' : ''}}>Laki - laki</option>
                            <option value="perempuan" {{$data->jenis_kelamin=='laki-laki' ? 'selected' : ''}}>Perempuan</option>
                          </select>
                    </div>
                    @error('jenis_kelamin')
                    <br>
                    <span>
                        {{ ucwords($message) }}
                    </span>
                    @enderror
                    <br>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" rows="3" name="alamat">{{$data->alamat}}</textarea>
                      </div>
                    @error('alamat')
                    <br>
                    <span>
                        {{ ucwords($message) }}
                    </span>
                    @enderror
                    <br>
                    <div class="form-group">
                        <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
                        <input class="form-control py-4" id="pekerjaan" type="text" placeholder="Pekerjaan" name="pekerjaan" value="{{$data->pekerjaan}}"/>
                    </div>
                    
                    @error('pekerjaan')
                    <br>
                    <span>
                        {{ ucwords($message) }}
                    </span>
                    @enderror
                    <br>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection