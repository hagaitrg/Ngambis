<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{

    public function index()
    {
        $materis = Materi::all();

        return view('guru.dashboard-guru', ['mmateris' => $materis]);
    }

    public function title()
    {
        $titles = Materi::All();

        return view('guru.quiz', ['titles' => $titles]);
    }

    public function insert(Request $req)
    {
        $file = $req->file('video');
        $tujuan_upload = 'uploaded_video';
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $date = date("Y-m-d");
        Materi::insert([
            "title" => $req->input('title'),
            "author" => $req->input('author'),
            "tanggal" => $req->input('tanggal'),
            "jam" => $req->input('jam'),
            "meet" => $req->input('meet'),
            "desc" => $req->input('desc'),
            "matpel_id" => $req->input('matpel'),
            "video" => $file->getClientOriginalName(),
            "created_at" => $date,
        ]);

        return redirect('/guru');
    }
}
