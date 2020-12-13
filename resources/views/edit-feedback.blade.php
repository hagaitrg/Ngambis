<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Feedback</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Edit Feedback
            </div>
            <div class="card-body">
                <form method="POST" action="/update/{{$feedback->id}}">
                    @csrf
                    @method('patch')
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="{{$feedback->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" value="{{$feedback->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp" class="col-sm-2 col-form-label">No. handphone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="hp" value="{{$feedback->hp}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hp" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="pesan" rows="3">{{$feedback->pesan}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>