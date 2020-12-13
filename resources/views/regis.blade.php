@extends('layouts.auth')

@section('auth')
<h5 class="card-title">Registrasi</h5>
<div class="form-group">
    <input type="text" class="form-control col-sm-10" name="username" placeholder="Name" required>
</div>
<div class="form-group">
    <input type="email" class="form-control col-sm-10" name="email" placeholder="Email" required>
</div>
<div class="form-group">
    <select class="form-control col-sm-10" name="kategori" required>
        <option selected>Category</option>
        <option value="customer">Customer</option>
        <option value="joki">Joki</option>
    </select>
</div>
<div class="form-group">
    <input type="password" class="form-control col-sm-10" name="password" placeholder="Password" required>
</div>
<div class="form-group">
    <input type="password" class="form-control col-sm-10" name="password2" placeholder="Confirmation Password" required>
</div>
<button type="submit" class="btn text-light btn-block col-sm-10 rounded-pill" name="register" style="background-color: #D1CB6D;">Sign Up</button>
<p class="mt-3">Sudah memiliki akun ? <a href="/login">Login</a></p>

@endsection