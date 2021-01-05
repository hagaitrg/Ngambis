@extends('layouts.siswa')

@section('materi-components')
    @forelse ($matpel as $index => $row)
    <a class="collapse-item" href="{{ route('materi.getMateriList', $row->id) }}">{{ $row->name }}</a>
    @empty
    <a class="collapse-item" href="-">Tidak ada menu.</a>
    @endforelse
@endsection

@section('content')
<div class="row">
    @foreach ($matpel as $index => $row)
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img src='{{ asset("matpel_logo/$row->image") }}' class="card-img-top py-2 px-2" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><b>{{ $row->name }}</b></h5>
                <p class="card-text">{{ $row->desc }}</p>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('quiz.getQuizEachMateri', $row->id) }}">Lihat Quiz</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
