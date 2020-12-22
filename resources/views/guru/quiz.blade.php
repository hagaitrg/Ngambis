@extends('layouts.guru')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Quiz</h1>
</div>
@include('alert::bootstrap')
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
                    <form method="" action="">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Quiz</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">No Soal</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="authot">Soal Quiz</label>
                            <textarea type="text" class="form-control" rows="3" name="author"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Matematika Dasar</option>
                                <option value="2">Fisika Dasar</option>
                                <option value="3">Kimia Dasar</option>
                                <option value="4">Bahasa Indonesia</option>
                                <option value="5">Bahasa Inggris</option>
                                <option value="6">Matematika Soshum</option>
                                <option value="7">Ekonomi</option>
                                <option value="8">Geografi</option>
                                <option value="9">Sejarah</option>
                                <option value="10">Sosiologi</option>
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