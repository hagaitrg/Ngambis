<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use App\Models\Matpel;

class GuruController extends Controller
{
    public function index()
    {
        $matpel = Matpel::all();

        return view("guru.penilaian", ["matpel" => $matpel]);
    }

    public function getListQuizByMatpel($matpelId)
    {
        $materi = Matpel::find($matpelId)->hasManyMateri;
        $matpel = Matpel::all();

        return view("guru.daftar-quiz", ["matpel" => $matpel, "materi" => $materi]);
    }
}
