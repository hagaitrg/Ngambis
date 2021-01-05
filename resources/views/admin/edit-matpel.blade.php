@extends('layouts.admin')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Mata Pelajaran</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Matpel</h6>
    </div>
    <div class="card-body">
        <div class="container">
            <form method="POST" action="{{ route('admin.matpel.update', $matpel->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="number" style="display: none;" value="{{ $matpel->id }}" required>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$matpel->name}}">
                </div>
                <div class="form-group">
                    <label for="desc">Deskripsi</label>
                    <textarea class="form-control" name="desc" rows="3">{{$matpel->desc}}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" value="{{$matpel->img}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update Matpel</button>
            </form>
        </div>
    </div>
</div>
@endsection