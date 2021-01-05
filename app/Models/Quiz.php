<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quiz extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "table_quiz";
    protected $guarded = [];

    public function belongsToMateri()
    {
        return $this->belongsTo(Materi::class, "materi_id");
    }

    public function hasOneJawaban()
    {
        return $this->hasOne(Jawaban::class, "soal_id");
    }

    public function getJawaban($soalId)
    {
        $get = DB::table('jawaban')
            ->select('jawaban')
            ->where('soal_id', $soalId)
            ->get();

        if (is_array($get)) {
            return $get[0]->jawaban;
        }
    }

    public function getJawabanAttribute($value)
    {
        return ucfirst($value);
    }
}
