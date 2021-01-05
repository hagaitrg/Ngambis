<?php

namespace App\Http\Controllers;

use App\Models\Matpel;
use Illuminate\Http\Request;

class MatpelController extends Controller
{
    public function indexSiswa()
    {
        $matpels = Matpel::all();

        return view('/siswa.dashboard-siswa', compact('matpels'));
    }

    public function indexAdmin()
    {
        $matpels = Matpel::all();

        return view('admin.matpel', compact('matpels'));
    }
}
