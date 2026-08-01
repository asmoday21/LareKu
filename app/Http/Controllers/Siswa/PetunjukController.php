<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;

class PetunjukController extends Controller
{
    public function index()
    {
        return view('siswa.petunjuk');
    }
}