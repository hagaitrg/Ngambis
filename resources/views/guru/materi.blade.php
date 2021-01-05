@extends('layouts.guru')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Materi</h1>
</div>
@include('alert::bootstrap')
<!-- Content Row -->
<div class="row">
    <!-- Area Chart -->
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Buat Materi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="container">
                    <form method="POST" action="{{ route('materi.insert') }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul Materi</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Penulis Materi</label>
                            <input type="text" class="form-control" name="author" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="jam">Jam</label>
                                    <input type="time" class="form-control" name="jam" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meet">Link Meet</label>
                            <input type="text" class="form-control" name="meet" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea type="text" class="form-control" name="desc" required></textarea>
                            <script>
                                CKEDITOR.replace('desc');
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="matepl">Mata Pelajaran</label>
                            <select class="form-control" name="matpel" required>
                                <option value="1">Matematika Dasar</option>
                                <option value="2">Fisika Dasar</option>
                                <option value="3">Kimia Dasar</option>
                                <option value="4">Matematika Soshum</option>
                                <option value="5">Ekonomi</option>
                                <option value="6">Geografi</option>
                                <option value="7">Sejarah</option>
                                <option value="8">Sosiologi</option>
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