@extends('layouts.siswa')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-center"><b>{{ $detailMateri->title }}</b></h5>
                <p style="margin-bottom: 0;">Ditulis oleh: {{ $detailMateri->author }}</p>
                <p>Dibuat tanggal: {{ date('d-M-Y', strtotime($detailMateri->created_at)) }}, Jam: {{ $detailMateri->jam }}</p>
                <p>Link meet: {{ $detailMateri->meet }}</p>
            </div>
            <div class="card-body">
                <p id="#" name="data" class="col-2 text-truncate" style="max-width: 50px;">{!! $detailMateri->desc !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection
