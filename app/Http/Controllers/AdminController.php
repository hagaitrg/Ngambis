<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matpel;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $matpel = Matpel::all();
        return view("admin.index", ["matpel" => $matpel]);
    }

    public function edit($matpelId)
    {
        $getMatpel = Matpel::find($matpelId);
        return view("admin.edit-matpel", ["matpel" => $getMatpel]);
    }

    public function update(Request $request, $matpelId)
    {
        $file = $request->file('image');
        $tujuan_upload = 'matpel_logo';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $matpel = Matpel::find($matpelId);
        $matpel->name = $request->input('name');
        $matpel->desc = $request->input('desc');
        $matpel->image = $file->getClientOriginalName();

        $matpel->save();

        return redirect(route('admin.matpel.index'));
    }

    public function indexUsers()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }
}
