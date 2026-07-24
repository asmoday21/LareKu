<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi';

    protected $fillable = [
        'guru_id',
        'tema',
        'judul',
        'deskripsi',
        'konten',
        'durasi',
        'is_published',
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function mediaPendukung()
    {
        return $this->hasMany(MediaPendukung::class, 'materi_id');
    }
}