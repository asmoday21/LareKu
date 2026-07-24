<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::latest()->get();

        return view(
            'guru.video.index',
            compact('videos')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tema' => 'required',
            'link' => 'required'
        ]);

        Video::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tema' => $request->tema,
            'link' => $request->link
        ]);

        return redirect()
            ->route('guru.video.index')
            ->with('success','Video berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view(
            'guru.video.edit',
            compact('video')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Video $video
    )
    {
        $video->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tema' => $request->tema,
            'link' => $request->link
        ]);

        return redirect()
            ->route('guru.video.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return back();
    }
}
