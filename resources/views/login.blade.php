@extends('layouts.auth')

@section('auth')
<div class="form-group">
    <input type="email" class="form-control col-sm-10" name="email" placeholder="Email">
</div>
<div class="form-group">
    <input type="password" class="form-control col-sm-10" name="password" placeholder="Passowrd">
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="ingat">
    <label class="form-check-label" for="ingat">Ingat Saya</label>
</div>
<button type="submit" class="btn btn-block col-sm-10 rounded-pill text-light" name="login" style="background-color: #D1CB6D;">Login</button>
<p class="mt-3">Belum memiliki akun ? <a href="/register">Registrasi</a></p>

@endsection