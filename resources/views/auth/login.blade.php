@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}" style="margin-top: 150px;">
    @csrf
    <h5 class="card-title">Login</h5>
    <div class="form-group">
        <input id="email" type="email" class="form-control col-sm-10 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <input id="password" type="password" class="form-control col-sm-10 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Passowrd">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
    <button type="submit" class="btn btn-block col-sm-10 rounded-pill text-light" name="login" style="background-color: #D1CB6D;">Login</button>
</form>
@endsection