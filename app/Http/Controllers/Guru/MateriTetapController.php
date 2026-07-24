<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Materi;
=======
use App\Models\MediaPendukung;
>>>>>>> bc3d876af6eb25fb3e2b5ce53c3d026b8fba5148

class MateriTetapController extends Controller
{
    public function tema1()
    {
<<<<<<< HEAD
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema1')
            ->latest()
            ->get();
=======
        return view(
            'guru.materi.tema1',
            compact('mediaPendukung')
        );
    }
>>>>>>> bc3d876af6eb25fb3e2b5ce53c3d026b8fba5148

        return view('guru.materi.tema1', compact('materi'));
    }
    public function tema2()
    {
<<<<<<< HEAD
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema2')
            ->latest()
                        ->get();

        return view('guru.materi.tema2', compact('materi'));
=======

        return view(
            'guru.materi.tema2',
            compact('mediaPendukung')
        );
>>>>>>> bc3d876af6eb25fb3e2b5ce53c3d026b8fba5148
    }

    public function tema3()
    {
<<<<<<< HEAD
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema3')
            ->latest()
            ->get();

        return view('guru.materi.tema3', compact('materi'));
=======
        
        return view(
            'guru.materi.tema3',
            compact('mediaPendukung')
        );
>>>>>>> bc3d876af6eb25fb3e2b5ce53c3d026b8fba5148
    }

    public function tema4()
    {
<<<<<<< HEAD
        $materi = Materi::with('mediaPendukung')
            ->where('tema', 'tema4')
            ->latest()
            ->get();

        return view('guru.materi.tema4', compact('materi'));
=======
        
        return view(
            'guru.materi.tema4',
            compact('mediaPendukung')
        );
    }

    public function optik()
    {

        return view(
            'guru.materi.optik',
            compact('mediaPendukung')
        );
>>>>>>> bc3d876af6eb25fb3e2b5ce53c3d026b8fba5148
    }
}
