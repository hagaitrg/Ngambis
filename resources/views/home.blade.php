@extends('layouts.app')

@section('content')
<section>
    <div class="jumbotron jumbotron-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mt-5">
                    <h1><b>Ayo Ngambis Bersama !</b></h1>
                    <a href="/course" class="btn btn-color btn-lg mt-3 text-light">Info Lebih Lanjut</a>
                </div>
                <div class="col-sm-6">
                    <img src="img/home.png" width="540px" height="280px">
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #C2C1BC;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <h1 class="text-light mt-5 mb-5"><b>Apa Kata Mereka</b></h1>
                    </center>
                </div>
            </div>
            <div class="row">
                <div class="card-deck mb-5">
                    <div class="card rounded-lg">
                        <img src="img/testi1.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <p class="card-text text-center"><b>-Dean</b></p>
                        </div>
                    </div>
                    <div class="card rounded-lg">
                        <img src="img/testi2.jpg" class="card-img-top" height="280px">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <p class="card-text text-center"><b>-Febri</b></p>
                        </div>
                    </div>
                    <div class="card rounded-lg">
                        <img src="img/testi3.jpg" class="card-img-top" height="280px">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little
                                bit longer.</p>
                            <p class="card-text text-center"><b>-Alexa</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center mt-5"><b>Fasilitas</b></h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6 mt-5">
                <h4 class="text-left mt-5"><b>Kelas</b></h4>
                <h5 class="mt-4 text-left" style="color:#83838D;">Kelas Virtual untuk membuat materi dan pemberian tugas belajar</h5>
            </div>
            <div class="col-sm-6">
                <img src="img/class.png" width="445px" height="356px" class="ml-5">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-5">
                <img src="img/kuis.png" width="445px" height="314px" class="ml-5">
            </div>
            <div class="col-sm-6 mt-5">
                <h4 class="text-right mt-5"><b>Kuis</b></h4>
                <h5 class="mt-4 text-right" style="color:#83838D;">Kuis setiap mata pelajaran yang di update secara berkala.</h5>
            </div>
        </div>
    </div>

    <footer class="footer mt-5" style="background-color: #83838D;">
        <div class="container">
            <div class="row">
                <h4 class="text-light text-left mt-5 mb-5">&copy;2020 Ngambis. All Rights Reserved</h4>
            </div>
        </div>
    </footer>
</section>
@endsection