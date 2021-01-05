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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center"><b>{{ $row->title }}</b></h5>
                <p style="margin-bottom: 0;">Ditulis oleh: {{ $row->author }}</p>
                <p>Dibuat tanggal: {{ date('d-M-Y', strtotime($row->created_at)) }}, Jam: {{ $row->jam }}</p>
            </div>
            <div class="card-body">
                <!-- <p id="#" name="data" class="col-2 text-truncate" style="max-width: 50px;">{!! $row->desc !!}</p> -->
            </div>
            <div class="card-footer">
                <a class="btn btn-primary btn-block" href="{{ route('materi.getDetailMateri', $row->id) }}">Buka Materi</a>
            </div>
        </div>
    </div>
</div>
@empty
<div class="row">
    <div class="col-md-12">
        <p class="text-center">Belum ada materi yang dibuat.</p>
    </div>
</div>
@endforelse
@endsection