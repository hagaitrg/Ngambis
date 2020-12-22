@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container mt-5">
        <center>
            <div class="card" style="width: 20rem;">
                <img src="img/course.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-dark"><b>Fasilitas</b></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Akses Materi Selamanya</li>
                    <li class="list-group-item">Diskusi lebih mudah lewat Whats App Group</li>
                    <li class="list-group-item">Kuis dan Laporan harian</li>
                </ul>
                <div class="card-body">
                    <a href="/register" class="btn btn-lg btn-block text-light" style="background-color:#D1CB6D ;">Daftar</a>
                </div>
            </div>
        </center>
    </div>
    <footer class="footer mt-5 fixed-bottom" style="background-color: #83838D;">
        <div class="container">
            <div class="row">
                <h4 class="text-light text-left mt-5 mb-5">&copy;2020 Ngambis. All Rights Reserved</h4>
            </div>
        </div>
    </footer>
</section>
@endsection