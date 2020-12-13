<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <style>
        h6 {
            font-family: 'Fredoka One', cursive;
        }

        .ngambis {
            font-family: 'Viga', sans-serif;
        }
    </style>
    <title>Auth</title>
</head>

<body>
    <div class="container">
        <div class="card shadow" style="margin-top: 150px;">
            <div class="row no-gutters">
                <div class="col-sm-6" style="background-color: #D1CB6D;">
                    <div class="card-body">
                        <a href="/home">
                            <button type="submit" class="btn btn-light btn-sm rounded-pill" style="color:#D1CB6D;">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                </svg> Back
                            </button>
                        </a>
                        <div class="d-flex justify-content-center">
                            <h6 class="display-4 ngambis text-light" style="margin-top: 200px;">
                                <strong>
                                    Ngambis
                                </strong>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-body mt-5">
                        <center>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <a href="/login" class="text-light">Sign In</a>
                                </label>
                                <label class="btn btn-secondary">
                                    <a href="/register" class="text-light">Sign Up</a>
                                </label>
                            </div>
                        </center>
                        <form class="ml-5 mb-5 mt-5" action="" method="post">
                            @yield('auth')
                        </form>
                        <div class="d-flex justify-content-end">
                            <small class="text-muted">&copy; Ngambis 2020</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>