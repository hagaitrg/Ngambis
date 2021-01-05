<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Matpel;
use App\Models\Materi;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuizController extends Controller
{
    public function insert(Request $req)
    {
        Quiz::insert([
            "soal" => $req->soal,
            "materi_id" => $req->materi
        ]);

        return redirect(route('quiz.title'));
    }

    public function index()
    {
        Matpel::find(1)->hasManyMateri[0]->hasManyQuiz;
        $matpel = Matpel::all();
        return view("quiz.index", ["matpel" => $matpel]);
    }

    public function getQuizEachMateri($matpelId)
    {
        $materi = Matpel::find($matpelId)->hasManyMateri;
        $matpel = Matpel::all();
        return view("quiz.quiz", ["materis" => $materi, "matpels" => $matpel]);
    }

    public function getSoalByMateriId($materiId)
    {
        $soal = Materi::find($materiId)->hasManyQuiz;
        $matpel = Matpel::all();

        // $get = DB::table('jawaban')
        //     ->select('jawaban')
        //     ->where('soal_id', 2)
        //     ->get();
        // $get[0]->jawaban);
        return view("siswa.quiz-siswa", ["soal" => $soal, "matpel" => $matpel]);
    }

    public function saveAnswerForSoal(Request $request, $soalId)
    {

        try {
            $check = Jawaban::where('soal_id', $request->input('soalId'))->first();
            if ($check != null) {
                $check->materi_id = $request->input('materiId');
                $check->soal_id = $request->input('soalId');
                $check->jawaban = $request->input('jawaban');

                $check->save();

                return response([
                    "message" => "Berhasil memeperbaharui jawaban."
                ], 200)
                    ->header('Content-Type', 'application/json');
            } else {
                Jawaban::insert([
                    "materi_id" => $request->input('materiId'),
                    "soal_id" => $request->input('soalId'),
                    "jawaban" => $request->input('jawaban')
                ]);

                return response([
                    "message" => "Berhasil menambah jawaban."
                ], 200)
                    ->header('Content-Type', 'application/json');
            }
        } catch (\Exception $e) {
            return response(["message" => $e->getMessage()], 505)
                ->header('Content/Type', 'application/json');
        }
    }

    public function getJawaban($soal)
    {
        try {
            $get = Jawaban::find($soal);
            if ($get != null) {
                return response([
                    "jawabanId" => $get->id,
                    "jawaban" => $get->jawaban
                ], 200)
                    ->header('Content-Type', 'application/json');
            } else {
                return response([
                    "message" => "tidak ditemukan"
                ], 404)
                    ->header('Content-Type', 'application/json');
            }
        } catch (\Exception $e) {
            return response([
                "message" => "Terjadi kesalahan",
                "errors" => $e->getMessage()
            ], 500)
                ->header('Content-Type', 'application/json');
        }
    }
}
