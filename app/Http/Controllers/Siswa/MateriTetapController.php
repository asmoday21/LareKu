<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;

class MateriTetapController extends Controller
{
    public function tema1()
    {
        return view('siswa.materi.tema1');
    }

    public function tema2()
    {
        return view('siswa.materi.tema2');
    }

    public function tema3()
    {
        return view('siswa.materi.tema3');
    }

        public function tema4()
    {
        return view('siswa.materi.tema4');
    }

    public function optik()
    {
        return view('siswa.materi.optik');
    }
}
