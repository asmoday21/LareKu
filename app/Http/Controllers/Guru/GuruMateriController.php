<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
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

                $file = $request->file('file');

                $filename = time() . '_' . preg_replace(
                    '/[^A-Za-z0-9.\-_]/',
                    '',
                    $file->getClientOriginalName()
                );

                $destination = public_path('storage/media_pendukung');

                if (!is_dir($destination)) {
                    mkdir($destination, 0755, true);
                }

                $file->move($destination, $filename);

                $media->file = 'media_pendukung/' . $filename;
            }

            if ($request->jenis == 'video_youtube') {
                $media->video_url = $request->video_url;
            }

            $media->save();
        }

        return redirect()
            ->route('guru.materi.index')
            ->with('success', 'Materi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $materi = Materi::with('mediaPendukung')->findOrFail($id);

        return view('guru.materi.edit', compact('materi'));
    }

    public function update(Request $request, $id)
    {
        $materi = Materi::findOrFail($id);

        $materi->update([
            'tema' => $request->tema,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
        ]);

        if ($request->hasFile('file')) {

            $media = $materi->mediaPendukung()->first();

            if ($media) {

                if ($media->file) {

                    $oldFile = public_path('storage/' . $media->file);

                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }

                $file = $request->file('file');

                $filename = time() . '_' . preg_replace(
                    '/[^A-Za-z0-9.\-_]/',
                    '',
                    $file->getClientOriginalName()
                );

                $destination = public_path('storage/media_pendukung');

                if (!is_dir($destination)) {
                    mkdir($destination, 0755, true);
                }

                $file->move($destination, $filename);

                $media->file = 'media_pendukung/' . $filename;
                $media->judul = $request->media_judul;
                $media->jenis = $request->jenis;

                if ($request->jenis == 'video_youtube') {
                    $media->video_url = $request->video_url;
                }

                $media->save();
            }
        }

        return redirect()
            ->route('guru.materi.index')
            ->with('success', 'Materi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $materi = Materi::findOrFail($id);

        foreach ($materi->mediaPendukung as $media) {

            if ($media->file) {

                $path = public_path('storage/' . $media->file);

                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $media->delete();
        }

        $materi->delete();

        return back()->with('success', 'Materi berhasil dihapus');
    }
}