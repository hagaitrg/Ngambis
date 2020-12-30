<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $table = "tabel_matpel";
    public $timestamps = false;
    protected $guarded = [];

    public function hasManyMateri()
    {
        return $this->hasMany(Materi::class, "matpel_id");
    }
}
