<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();

        return view(
            'siswa.video.index',
            compact('videos')
        );
    }
}