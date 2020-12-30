@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            <div class="card" style="width: 30rem;">
                <img src="img/saintek.png" class="card-img-top" height="300px">
                <div class="card-body">
                    <h5 class="card-title">Saintek(Sains dan Teknologi)</h5>
                    <p class="card-text">Pada jurusan/peminatan ini anda akan banyak mempelajari seputar matematika dan ipa seperti fisiak, kimia dan biologi.</p>
                </div>
                <div class="card-footer text-center mt-4">
                    <a href="#" class="btn btn-outline-success btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> Let's Go
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card" style="width: 30rem;">
                <img src="img/soshum.jpeg" class="card-img-top" height="300px">
                <div class="card-body">
                    <h5 class="card-title">Soshum(Sosial dan Humaniora)</h5>
                    <p class="card-text">Pada jurusan/peminatan ini anda akan banyak mempelajari seputar matematika soshum dan IPS seperti ekonomi,sejarah, geografi, dan sejarah</p>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-outline-success btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cursor-fill" viewBox="0 0 16 16">
                            <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z" />
                        </svg> Let's Go
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-5 fixed-bottom" style="background-color: #83838D;">
    <div class="container">
        <div class="row">
            <h4 class="text-light text-left mt-5 mb-5">&copy;2020 Ngambis. All Rights Reserved</h4>
        </div>
    </div>
</footer>
@endsection