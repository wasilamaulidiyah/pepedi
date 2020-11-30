@extends('auth.template')
@section('title-body','Buat Akun')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
    @csrf
        <div class="form-group">
            <label class="small mb-1" for="inputLastName">Nama Lengkap</label>
            <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter full name" name="name" / value="{{old('name')}}">
            @error('name')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" value="{{old('email')}}" />
            @error('email')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Password</label>
                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                    @error('password')
                    <label class="small mb-1 text-danger">
                        {{ucwords($message)}}
                    </label>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" />
                    @error('confirmation_password')
                    <label class="small mb-1 text-danger">
                        {{ucwords($message)}}
                    </label>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="jenisKelamin">Jenis Kelamin</label>
            <select class="form-control py-4" name="jenis_kelamin" id="jenisKelamin">
                <option disabled selected>Pilih Jenis Kelamin</option>
                <option value="laki-laki">Laki Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat">{{old('alamat')}}</textarea>
            @error('alamat')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
          </div>
        <div class="form-group">
            <label class="small mb-1" for="nohp">Nomor HP</label>
            <input class="form-control py-4" name="nohp" id="nohp" type="number" aria-describedby="emailHelp" placeholder="Masukkan Nomor HP" value="{{old('nohp')}}"/>
            @error('nohp')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
        </div>
        <div class="form-group">
            <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
            <input class="form-control py-4" id="pekerjaan" type="text" aria-describedby="emailHelp" placeholder="Masukkan Pekerjaan" name="pekerjaan" value="{{old('pekerjaan')}}"/>
            @error('pekerjaan')
            <label class="small mb-1 text-danger">
                {{ucwords($message)}}
            </label>
            @enderror
        </div>
        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
    </form>
</div>
<div class="card-footer text-center">
    <div class="small"><a href="login.html">Have an account? Go to login</a></div>
</div>
@stop