<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "materis";
    protected $guarded = [];

    public function belongsToMatpel()
    {
        return $this->belongsTo(Matpel::class, "matpel_id");
    }

    public function hasManyQuiz()
    {
        return $this->hasMany(Quiz::class, "materi_id");
    }
}
