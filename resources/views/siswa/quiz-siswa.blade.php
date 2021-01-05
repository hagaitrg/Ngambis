@extends('layouts.siswa')

@section('materi-components')
@forelse ($matpel as $index => $row)
<a class="collapse-item" href="{{ route('materi.getMateriList', $row->id) }}">{{ $row->name }}</a>
@empty
<a class="collapse-item" href="-">Tidak ada menu.</a>
@endforelse
@endsection

@section('content')
@forelse ($soal as $index => $row)
<div class="row">
    <div class="col-sm-12">
        @csrf
        <div class="card">
            <div class="card-header">
                {{ $index+1 }}
            </div>
            <div class="card-body">
                {{ $row->soal }}
                <input type="number" style="display: none;" id="soal_id" name="soal_id" value="{{ $row->id }}" required>
                <input type="number" style="display: none;" id="materi_id" name="materi_id" value="{{ $row->belongsToMateri->id }}" required>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <label for="jawaban">Jawaban</label>
                    <textarea class="form-control" id="jawaban" rows="3"><?php $tes = json_decode(json_encode($row->hasOneJawaban), true);
                                                                            echo $tes != null ? $tes["jawaban"] : "" ?></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-small btn-soal">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@empty
<div class="row">
    <div class="col-md-12">
        <p class="text-center">Belum ada soal dibuat.</p>
    </div>
</div>
@endforelse


<script>
    const getJawabanSoal = function(soalId, event) {
        fetch(`/jawaban/${soalId}`, {
                'method': 'GET',
                'headers': {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.status != 200) {
                    return Promise.reject(response.statusText);
                } else if (response.status == 200) {
                    return Promise.resolve(response.json())
                }
            })
            .then(data => {
                event.target.parentElement.parentElement.parentElement.childNodes[6].children[0].children[1].value = data.jawaban;
            })
            .catch(err => {
                console.log(err);
            });
        console.log('tssss00000');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const getAllButton = document.querySelectorAll('.btn-soal');
        const getAgain = document.querySelectorAll('.btn-soal');

        getAgain.forEach(again => {
            again.addEventListener('click', event => {
                event.preventDefault();
                const soalId2 = event.target.parentElement.parentElement.parentElement.childNodes[4].children[0].value;

                getJawabanSoal(soalId2, event);
            });
        });


        // console.log(getAllButton);
        getAllButton.forEach(btn => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();

                if (event.target.classList.contains('btn-soal')) {
                    const soalId = event.target.parentElement.parentElement.parentElement.childNodes[4].children[0].value;
                    const materiId = event.target.parentElement.parentElement.parentElement.childNodes[4].children[1].value;
                    const jawaban = event.target.parentElement.parentElement.parentElement.childNodes[6].children[0].children[1].value
                    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    console.log(jawaban);

                    fetch(`http://127.0.0.1:8000/quiz/soal/${soalId}`, {
                            'method': 'post',
                            'headers': {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': token
                            },
                            'body': JSON.stringify({
                                "soalId": soalId,
                                "materiId": materiId,
                                "jawaban": jawaban
                            })
                        })
                        .then(response => {
                            if (response.status !== 200) {
                                return Promise.reject(response.statusText);
                            } else if (response.status === 200) {
                                return Promise.resolve(response.json())
                            }
                        })
                        .then(data => {
                            // console.log(data);
                            alert(`${data.message} nomor ${soalId}`);
                            getJawabanSoal(soalId, event);
                        })
                        .catch(err => {
                            // console.log(err);
                            alert(`${data.message} nomor ${soalId}`);
                        });
                }
            });
        });
    });
</script>
@endsection