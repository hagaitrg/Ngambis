@extends('layouts.siswa')

@section('materi-components')
    @forelse ($matpels as $index => $row)
    <a class="collapse-item" href="{{ route('materi.getMateriList', $row->id) }}">{{ $row->name }}</a>
    @empty
    <a class="collapse-item" href="-">Tidak ada menu.</a>
    @endforelse
@endsection

@section('content')
@forelse ($materis as $index => $row)
<div class="row" style="margin-bottom: 10px;">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center"><b>Quiz {{ $row->title }}</b></h5>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('quiz.getSoalByMateriId', $row->id) }}">Buka Quiz</a>
            </div>
        </div>
    </div>
</div>
@empty
<div class="row">
    <div class="col-md-12">
        <p class="text-center">Belum ada quiz yang dibuat.</p>
    </div>
</div>
@endforelse
@endsection
