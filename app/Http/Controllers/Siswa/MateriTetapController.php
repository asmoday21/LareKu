<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use App\Models\Materi;

class MateriTetapController extends Controller
{
    public function tema1()
    {
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema1')
            ->latest()
            ->get();

        return view('siswa.materi.tema1', compact('materi'));
    }
    public function tema2()
    {
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema2')
            ->latest()
                        ->get();

        return view('siswa.materi.tema2', compact('materi'));
    }

    public function tema3()
    {
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema3')
            ->latest()
            ->get();

        return view('siswa.materi.tema3', compact('materi'));
    }

    public function tema4()
    {
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema4')
            ->latest()
            ->get();

        return view('siswa.materi.tema4', compact('materi'));
    }
}
