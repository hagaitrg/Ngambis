@extends('layouts.guru')

@section('materi-components')
@forelse ($matpel as $index => $row)
<a class="collapse-item" href="{{ route('materi.getMateriList', $row->id) }}">{{ $row->name }}</a>
@empty
<a class="collapse-item" href="-">Tidak ada menu.</a>
@endforelse
@endsection

@section('content')
@forelse ($materi as $index => $row)
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center"><b>{{ $row->title }}</b></h5>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('materi.getDetailMateri', $row->id) }}">Lihat Peserta Quiz</a>
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