<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_type',
        'role',
        'message',
    ];

    /**
     * Mendapatkan data guru jika chat milik guru.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'user_id');
    }

    /**
     * Mendapatkan data siswa jika chat milik siswa.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'user_id');
    }

    /**
     * Mendapatkan pemilik chat berdasarkan user_type.
     */
    public function getOwnerAttribute()
    {
        if ($this->user_type === 'guru') {
            return $this->guru;
        }

        if ($this->user_type === 'siswa') {
            return $this->siswa;
        }

        return null;
    }
}