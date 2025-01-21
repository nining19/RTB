<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiodataPengguna extends Model
{
    use HasFactory;

    protected $table = 'biodata_pengguna'; // Nama tabel
    protected $primaryKey = 'id_biodata'; // Primary key
    protected $fillable = ['id_pengguna', 'nama', 'no_tlp', 'alamat', 'foto_profil']; // Kolom yang dapat diisi

    /**
     * Relasi dengan tabel pengguna.
     */
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }
}
