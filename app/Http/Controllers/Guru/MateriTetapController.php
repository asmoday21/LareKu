<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\MediaPendukung;

class MateriTetapController extends Controller
{
    public function tema1()
    {
        return view(
            'guru.materi.tema1',
            compact('mediaPendukung')
        );
    }

    public function tema2()
    {

        return view(
            'guru.materi.tema2',
            compact('mediaPendukung')
        );
    }

    public function tema3()
    {
        
        return view(
            'guru.materi.tema3',
            compact('mediaPendukung')
        );
    }

        public function tema4()
    {
        
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
    }
}
