<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ankurk91\LaravelAlert\Facades\Alert;
use App\Models\Materi;
use App\Models\Matpel;

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
        $date = date("Y-m-d");
        Materi::insert([
            "title" => $req->input('title'),
            "author" => $req->input('author'),
            "tanggal" => $req->input('tanggal'),
            "jam" => $req->input('jam'),
            "meet" => $req->input('meet'),
            "desc" => $req->input('desc'),
            "matpel_id" => $req->input('matpel'),
            "created_at" => $date,
        ]);

        Alert::success('Materi berhasil di submit');

        return redirect('/guru');
    }

    public function getListMateri($matpelId)
    {
        try {
            $materi = Matpel::find($matpelId)->hasManyMateri;
            $matpel = Matpel::all();
            return view("siswa.daftar-materi", ["materis" => $materi, "matpels" => $matpel]);
        } catch (\Exception $e) {
            return redirect(route("matpel.index"))
                ->with(["failed" => "Terjadi Kesalahan. Errors: " . $e->getMessage()]);
        }
    }

    public function getDetailMateri($materiId)
    {
        try {
            $materi = Materi::find($materiId);
            return view("siswa.detail-materi", ["detailMateri" => $materi]);
        } catch (\Exception $e) {
            return redirect(route("matpel.index"))
                ->with(["failed" => "Terjadi Kesalahan. Errors: " . $e->getMessage()]);
        }
    }
}
