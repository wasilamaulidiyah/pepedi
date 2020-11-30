@extends('auth.template')
@section('title-body','Login')
@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Email</label>
            <input class="form-control py-4" id="inputEmailAddress" name="email" type="" placeholder="Enter email address" />
            @error('email')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputPassword">Password</label>
            <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
            @error('password')
                <span>
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
            </div>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <a class="small" href="password.html">Forgot Password?</a>
            <button class="btn btn-primary" type="submit">Login</button>
        </div>
    </form>
</div>
<div class="card-footer text-center">
    <div class="small"><a href="register">Need an account? Sign up!</a></div>
</div>
@stop