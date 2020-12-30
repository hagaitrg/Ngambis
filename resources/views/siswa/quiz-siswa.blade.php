@extends('layouts.siswa')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    No.
                </div>
                <div class="card-body">
                    Soal Quiz
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Jawaban</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection