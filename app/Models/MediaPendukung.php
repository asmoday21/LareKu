<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaPendukung extends Model
{
    protected $table = 'media_pendukungs';

    protected $fillable = [
        'materi_id',
        'judul',
        'jenis',
        'file',
        'video_url',
        'urutan'
    ];

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}