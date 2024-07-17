<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_petugas', 'tanggal_upload', 'judul', 'gambar', 'deskripsi'
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'id_petugas');
    }
}
