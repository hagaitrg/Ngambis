<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

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
}
