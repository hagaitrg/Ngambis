<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Ngambis</title>
    <style>
        .btn-color {
            background-color: #D1CB6D;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <div class="col-sm-3">
                <a class="navbar-brand" href="/home">
                    <img src="/img/logo1.png" height="48px" width="144px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-sm-6">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home"><b>Home</b></a>
                        </li>
                        <li class="nav-item ml-3 mr-3">
                            <a class="nav-link" href="/course"><b>Kursus</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about"><b>Tentang</b></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                @guest
                <a class="btn btn-color btn-block text-light" href="/register">Berlangganan</a>
                @else
                <a class="btn btn-color btn-block text-light" href="{{Auth::user()->role->role == 'siswa' ? '/siswa': (Auth::user()->role->role == 'guru' ? '/guru':'/admin')}}">Dashboard</a>

                @endguest
            </div>
        </div>
        </div>
    </nav>

    @yield('content')

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>