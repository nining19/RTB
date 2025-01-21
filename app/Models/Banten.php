<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banten extends Model
{
    use HasFactory;

    protected $table = 'banten'; // Nama tabel
    protected $primaryKey = 'id_banten'; // Primary key
    protected $fillable = ['id_pengguna', 'nama_banten', 'deskripsi_banten', 'img_path', 'video_path']; // Kolom yang dapat diisi

    /**
     * Relasi dengan tabel pengguna.
     */
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }
}
