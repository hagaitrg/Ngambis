@extends('layouts.admin')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Feedbacks</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tables Feedbacks</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>No. Handphone</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedbacks as $index => $f)
                    <tr>
                        <th>{{$index+1}}</th>
                        <th>{{$f->name}}</th>
                        <th>{{$f->email}}</th>
                        <th>{{$f->hp}}</th>
                        <th>{{$f->pesan}}</th>
                        <th>
                            <form action="/delete/{{$f->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <a href="/edit-feedback/{{$f->id}}" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection