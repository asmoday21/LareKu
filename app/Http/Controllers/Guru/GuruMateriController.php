<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\Storage;
use App\Models\MediaPendukung;

class GuruMateriController extends Controller
{
    public function index(Request $request)
    {
        $query = Materi::query();

        if ($request->has('search')) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $materi = $query->latest()->paginate(10);

        return view('guru.materi.index', compact('materi'));
    }

    public function create()
    {
        return view('guru.materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tema' => 'required',
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'konten' => 'nullable',

            'media_judul' => 'nullable|max:255',
            'jenis' => 'nullable',
            'file' => 'nullable|file|max:51200',
            'video_url' => 'nullable'
        ]);

        $materi = Materi::create([
            'guru_id' => auth()->id(),
            'tema' => $request->tema,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'durasi' => 0,
            'is_published' => true
        ]);

        if ($request->jenis) {

            $media = new MediaPendukung();

            $media->materi_id = $materi->id;
            $media->judul = $request->media_judul;
            $media->jenis = $request->jenis;
            $media->urutan = 1;

            if ($request->hasFile('file')) {

                $media->file = $request->file('file')
                    ->store('media_pendukung','public');

            }

            if ($request->jenis == 'video_youtube') {

                $media->video_url = $request->video_url;

            }

            $media->save();
        }

        return redirect()->route('guru.materi.index')
            ->with('success','Materi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $materi = Materi::findOrFail($id);
        return view('guru.materi.edit', compact('materi'));
    }

    public function update(Request $request,$id)
    {
        $materi = Materi::findOrFail($id);

        $materi->update([
            'tema'=>$request->tema,
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'konten'=>$request->konten,
        ]);

        return redirect()->route('guru.materi.index')
                ->with('success','Materi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        foreach($materi->mediaPendukung as $media){

            if($media->file){

                Storage::disk('public')->delete($media->file);

            }

        }

        $materi->delete();

        return back()->with('success','Materi berhasil dihapus');
    }
}
