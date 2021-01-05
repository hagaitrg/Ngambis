<?php

namespace App\Http\Controllers;

use App\Models\Feedbacks;
use Illuminate\Http\Request;
use Ankurk91\LaravelAlert\Facades\Alert;
use App\Models\Materi;
use App\Models\Matpel;
use App\Models\User;

class FeedbackController extends Controller
{
    public function create(Request $req)
    {
        Feedbacks::insert([
            'name' => $req->name,
            'email' => $req->email,
            'hp' => $req->hp,
            'pesan' => $req->pesan
        ]);

        Alert::success('Feedback anda telah terikirim :D');

        return redirect('/about');
    }

    public function Dashboardindex()
    {
        $feedbacks = Feedbacks::all();

        $countFeedback = Feedbacks::count();

        $countMatpel = Matpel::count();

        $users = User::all();
        $matpels = Matpel::all();

        return view('admin.admin', compact('feedbacks', 'countFeedback', 'countMatpel', 'users', 'matpels'));
    }

    public function index()
    {
        $feedbacks = Feedbacks::all();

        return view('admin.feedback', compact('feedbacks'));
    }

    public function destroy($id)
    {
        Feedbacks::where('id', $id)->delete();

        Alert::success('Berhasil delete Feedback');

        return redirect('/admin.admin');
    }

    public function edit($id)
    {
        $feedback = Feedbacks::find($id);

        return view('admin.edit-feedback', compact('feedback'));
    }

    public function update($id, Request $req)
    {
        Feedbacks::where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'hp' => $req->hp,
            'pesan' => $req->pesan
        ]);

        Alert::success('Berhasil Edit Feedback');

        return redirect('/admin');
    }
}
