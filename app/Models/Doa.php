<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    use HasFactory;

    protected $table = 'doa'; // Nama tabel
    protected $primaryKey = 'id_doa'; // Primary key
    protected $fillable = ['mantra_doa', 'terjemahan', 'audio_path']; // Kolom yang dapat diisi
}

