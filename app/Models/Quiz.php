<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
