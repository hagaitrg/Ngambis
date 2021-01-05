@extends('layouts.guru')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Quiz</h1>
    @include('alert::bootstrap')
</div>
<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Buat Quiz</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="container">
                    <form method="POST" action="create_quiz">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="soal">Soal Quiz</label>
                            <textarea type="text" class="form-control" rows="3" name="soal"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="materi">Materi</label>
                            <select class="form-control" name="materi">
                                <option value="-">Pilih Materi</option>
                                @foreach ($titles as $index => $title)
                                <option value="{{$title->id}}">{{$title->title}} - {{$title->belongsToMatpel->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mb-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection