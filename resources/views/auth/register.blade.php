@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('register') }}" class="mb-5 mt-5">
    @csrf
    <h5 class="card-title">Registrasi</h5>
    <div class="form-group">
        <input placeholder="Nama" id="name" type="text" class="form-control @error('name') is-invalid @enderror col-sm-10" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror col-sm-10" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <select class="form-control col-sm-10 @error('role') is-invalid @enderror" name="role" required>
            <option selected value="">Category</option>
            <option value="3">Siswa</option>
            <option value="2">Guru</option>
        </select>
        @error('role')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror col-sm-10" name="password" required autocomplete="new-password" placeholder="Passowrd">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <input id="password-confirm" type="password" class="form-control col-sm-10" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
    </div>
    <button type="submit" class="btn text-light btn-block col-sm-10 rounded-pill" name="register" style="background-color: #D1CB6D;">Sign Up</button>
</form>
@endsection