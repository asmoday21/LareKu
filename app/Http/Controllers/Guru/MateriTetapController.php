<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;

class MateriTetapController extends Controller
{
    public function tema1()
    {
        return view('guru.materi.tema1');
    }

    public function tema2()
    {
        return view('guru.materi.tema2');
    }

    public function tema3()
    {
        return view('guru.materi.tema3');
    }

        public function tema4()
    {
        return view('guru.materi.tema4');
    }

    public function optik()
    {
        return view('guru.materi.optik');
    }
}
