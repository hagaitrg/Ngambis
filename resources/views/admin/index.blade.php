@extends('layouts.admin')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Mata Pelajaran</h1>
<!-- DataTales Example -->
<div class="row">
    @forelse ($matpel as $index => $row)
    <div class="col-sm-4 mb-3">
        <div class="card" style="width: 20rem;">
            <img src='{{ asset("matpel_logo/$row->image") }}' class="card-img-top py-2 px-2" alt="image is empty">
            <div class="card-body">
                <h5 class="card-title text-center"><b>{{ $row->name }}</b></h5>
                <p class="card-text">{{ $row->desc != null ? $row->desc : '-' }}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('admin.matpel.edit', $row->id) }}">Edit Matpel</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection