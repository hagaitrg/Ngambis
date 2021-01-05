<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = "jawaban";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $guarded = [];

    public function belongsToMateri()
    {
        return $this->belongsTo(Materi::class, "materi_id");
    }

    public function belongsToQuiz()
    {
        return $this->belongsTo(Quiz::class, "quiz_id");
    }
}
