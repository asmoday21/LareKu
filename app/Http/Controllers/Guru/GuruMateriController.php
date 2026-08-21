<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\MediaPendukung;

class GuruMateriController extends Controller
{
    /**
     * Tampilkan daftar materi pembelajaran.
     */
    public function index(Request $request)
    {
        $query = Materi::with('mediaPendukung');

        if ($request->has('search') && !empty($request->search)) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $materi = $query->latest()->paginate(10);

        return view('guru.materi.index', compact('materi'));
    }

    /**
     * Tampilkan formulir tambah materi baru.
     */
    public function create(Request $request)
    {
        return view('guru.materi.create', [
            'tema' => $request->tema,
            'subtema' => $request->subtema
        ]);
    }

    /**
     * Simpan materi baru beserta banyak lampiran media (1:N).
     */
    public function store(Request $request)
    {
        $request->validate([
            'tema' => 'required',
            'judul' => 'required|max:255',
            'subtema' => 'nullable|max:255',
            'deskripsi' => 'nullable',
            'konten' => 'nullable',

            // Validasi Array Lampiran
            'media_judul.*' => 'nullable|max:255',
            'jenis.*' => 'nullable',
            'file.*' => 'nullable|file|max:51200',
            'video_url.*' => 'nullable',
            'external_link.*' => 'nullable'
        ]);

        $materi = Materi::create([
            'guru_id' => auth()->id(),
            'tema' => $request->tema,
            'judul' => $request->judul,
            'subtema' => $request->subtema,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'durasi' => 0,
            'is_published' => true
        ]);

        if ($request->has('jenis') && is_array($request->jenis)) {
            foreach ($request->jenis as $index => $jenis) {
                // Abaikan baris repeater yang jenis medianya tidak dipilih
                if (empty($jenis)) {
                    continue;
                }

                $media = new MediaPendukung();
                $media->materi_id = $materi->id;
                
                // Fallback judul lampiran ke judul materi jika dikosongkan
                $judulInput = $request->media_judul[$index] ?? null;
                $media->judul = !empty($judulInput) ? $judulInput : $materi->judul . ' - Lampiran ' . ($index + 1);
                
                $media->jenis = $jenis;
                $media->urutan = $index + 1;

                // Proses Upload File Lokal
                if ($request->hasFile("file.{$index}")) {
                    $file = $request->file("file.{$index}");
                    $filename = time() . '_' . $index . '_' . preg_replace('/[^A-Za-z0-9.\-_]/', '', $file->getClientOriginalName());
                    $destination = public_path('storage/media_pendukung');

                    if (!is_dir($destination)) {
                        mkdir($destination, 0755, true);
                    }

                    $file->move($destination, $filename);
                    $media->file = 'media_pendukung/' . $filename;
                }

                // URL YouTube
                if ($jenis == 'video_youtube' && isset($request->video_url[$index])) {
                    $media->video_url = $request->video_url[$index];
                }

                // Link Eksternal
                if ($jenis == 'link' && isset($request->external_link[$index])) {
                    $media->external_link = $request->external_link[$index];
                }

                $media->save();
            }
        }

        return redirect()
            ->route('guru.materi.index')
            ->with('success', 'Materi dan lampiran berhasil ditambahkan');
    }

    /**
     * Tampilkan formulir edit materi.
     */
    public function edit($id)
    {
        $materi = Materi::with('mediaPendukung')->findOrFail($id);

        return view('guru.materi.edit', compact('materi'));
    }

    /**
     * Perbarui materi beserta pengelolaan banyak lampiran media (Update / Add / Delete 1:N).
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tema' => 'required',
            'judul' => 'required|max:255',
            'subtema' => 'nullable|max:255',
            'deskripsi' => 'nullable',
            'konten' => 'nullable',

            // Validasi Array Lampiran
            'media_id.*' => 'nullable',
            'media_judul.*' => 'nullable|max:255',
            'jenis.*' => 'nullable',
            'file.*' => 'nullable|file|max:51200',
            'video_url.*' => 'nullable',
            'external_link.*' => 'nullable'
        ]);

        $materi = Materi::findOrFail($id);

        $materi->update([
            'tema' => $request->tema,
            'judul' => $request->judul,
            'subtema' => $request->subtema,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
        ]);

        $keptMediaIds = [];

        if ($request->has('jenis') && is_array($request->jenis)) {
            foreach ($request->jenis as $index => $jenis) {
                if (empty($jenis)) {
                    continue;
                }

                $mediaId = $request->media_id[$index] ?? null;
                $media = null;

                if ($mediaId) {
                    $media = MediaPendukung::where('materi_id', $materi->id)->find($mediaId);
                }

                if (!$media) {
                    $media = new MediaPendukung();
                    $media->materi_id = $materi->id;
                }

                $judulInput = $request->media_judul[$index] ?? null;
                $media->judul = !empty($judulInput) ? $judulInput : $materi->judul . ' - Lampiran ' . ($index + 1);
                $media->jenis = $jenis;
                $media->urutan = $index + 1;

                // Cek jika ada file baru diunggah untuk mengganti file lama
                if ($request->hasFile("file.{$index}")) {
                    // Hapus file lama jika ada
                    if ($media->file) {
                        $oldFile = public_path('storage/' . $media->file);
                        if (file_exists($oldFile)) {
                            @unlink($oldFile);
                        }
                    }

                    $file = $request->file("file.{$index}");
                    $filename = time() . '_' . $index . '_' . preg_replace('/[^A-Za-z0-9.\-_]/', '', $file->getClientOriginalName());
                    $destination = public_path('storage/media_pendukung');

                    if (!is_dir($destination)) {
                        mkdir($destination, 0755, true);
                    }

                    $file->move($destination, $filename);
                    $media->file = 'media_pendukung/' . $filename;
                }

                // Handle YouTube & External Link
                $media->video_url = ($jenis == 'video_youtube') ? ($request->video_url[$index] ?? null) : null;
                $media->external_link = ($jenis == 'link') ? ($request->external_link[$index] ?? null) : null;

                $media->save();
                $keptMediaIds[] = $media->id;
            }
        }

        // Hapus lampiran lama dari database & direktori fisik jika dihapus oleh guru di form repeater
        $removedMedia = MediaPendukung::where('materi_id', $materi->id)
            ->whereNotIn('id', $keptMediaIds)
            ->get();

        foreach ($removedMedia as $oldMedia) {
            if ($oldMedia->file) {
                $path = public_path('storage/' . $oldMedia->file);
                if (file_exists($path)) {
                    @unlink($path);
                }
            }
            $oldMedia->delete();
        }

        return redirect()
            ->route('guru.materi.index')
            ->with('success', 'Materi dan lampiran berhasil diperbarui');
    }

    /**
     * Hapus materi beserta seluruh lampiran fisik dan databasenya.
     */
    public function destroy($id)
    {
        $materi = Materi::with('mediaPendukung')->findOrFail($id);

        foreach ($materi->mediaPendukung as $media) {
            if ($media->file) {
                $path = public_path('storage/' . $media->file);
                if (file_exists($path)) {
                    @unlink($path);
                }
            }
            $media->delete();
        }

        $materi->delete();

        return back()->with('success', 'Materi berhasil dihapus');
    }
}