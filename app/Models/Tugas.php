<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth; // Digunakan untuk relasi yang berhubungan dengan user yang login
use Carbon\Carbon; // Digunakan untuk manipulasi tanggal

class Tugas extends Model
{
    use HasFactory;
    
    // Nama tabel yang terkait dengan model ini. Defaultnya adalah bentuk plural dari nama model ('tugas').
    protected $table = 'tugas';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     * Pastikan semua kolom yang akan diisi dari request ada di sini.
     * 'original_filename' ditambahkan untuk menyimpan nama file asli.
     * 'nilai' dan 'catatan' dihapus karena ini umumnya atribut dari 'TugasJawaban', bukan 'Tugas'.
     */
    protected $fillable = [
        'judul',
        'deskripsi',
        'batas_pengumpulan',
        'urutan', // Asumsi 'urutan' adalah properti tugas itu sendiri
        'kelas_id',
        'guru_id',
        'materi', // Asumsi 'materi' adalah properti tugas itu sendiri
        'lampiran', // Tambahkan kolom lampiran
        'original_filename', // Tambahkan kolom untuk nama file asli
        'link_tugas', // Tambahkan kolom untuk link tugas eksternal
    ];

    protected $casts = [
        'batas_pengumpulan' => 'datetime',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function guru()
    {
        // Asumsi model User adalah representasi dari guru
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function getBatasPengumpulanFormattedAttribute()
    {
        return Carbon::parse($this->batas_pengumpulan)
                     ->timezone('Asia/Jakarta')
                     ->translatedFormat('d M Y, H:i');
    }
}
