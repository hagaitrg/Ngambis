@extends('layouts.app')
@section('content')
@include('alert::bootstrap')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h5 class="mt-5"><b>Hubungi Kami</b></h5>
            <p>
                Apabila terdapat pertanyaan seputar Ngambis atau kerjasama dan hal lainnya,
                hubungi kami di +62 822 1954 2545 atau isi formulir di bawah ini.
            </p>
            <form method="POST" action="/proses-feedback">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="hp">No. Handphone</label>
                    <input type="text" class="form-control" name="hp">
                </div>
                <div class="form-group">
                    <label for="feedback">Feedback</label>
                    <textarea class="form-control" name="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-color btn-block text-light">Submit</button>
            </form>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="card mt-5 ml-5" style="width: 19rem;">
                    <div class="card-header" style="background-color: #C2C1BC;">
                        <b>Kontak</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h6>Jam kerja :</h6>
                            <p>10.00 - 21.00 WIB (Weekdays)</p>
                            <p>10.00 - 17.00 WIB (Weekend)</p>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col text-left">
                                    <p>Telepon</p>
                                </div>
                                <div class="col text-right" style="color:#D1CB6D;">
                                    0822 1954 2545
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col text-left">
                                    <p>Email</p>
                                </div>
                                <div class="col text-right" style="color:#D1CB6D;">
                                    info@ngambis.com
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col text-left">
                                    <p>Instagram</p>
                                </div>
                                <div class="col text-right" style="color:#D1CB6D;">
                                    @ngambis
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="card mt-5 ml-5" style="width: 19rem;">
                    <div class="card-header" style="background-color: #C2C1BC;">
                        <b>Alamat</b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Jl. Segarawana Raya No.4,
                            Mejasem Barat, Kramat,
                            Kab Tegal, Jawa tengah 52181
                        </li>
                    </ul>
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