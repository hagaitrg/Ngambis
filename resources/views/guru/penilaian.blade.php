@extends('layouts.guru')

@section('materi-components')
@forelse ($matpel as $index => $row)
<a class="collapse-item" href="{{ route('materi.getMateriList', $row->id) }}">{{ $row->name }}</a>
@empty
<a class="collapse-item" href="-">Tidak ada menu.</a>
@endforelse
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Penilaian</h1>
</div>
<div class="row">
    @foreach ($matpel as $index => $row)
    <div class="col-sm-4 mb-5">
        <div class="card" style="width: 20rem;">
            <img src='{{ asset("matpel_logo/$row->image") }}' class="card-img-top py-2 px-2" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>{{ $row->name }}</b></h5>
                <!-- <p class="card-text">{{ $row->desc }}</p> -->
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('guru.getListQuizByMatpel', $row->id) }}">Buka Quiz</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection