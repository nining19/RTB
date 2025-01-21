<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = 'pengguna'; // Nama tabel
    protected $primaryKey = 'id_pengguna'; // Primary key
    protected $fillable = ['username', 'password', 'email']; // Kolom yang dapat diisi

    /**
     * Relasi dengan tabel biodata_pengguna.
     */
    public function biodataPengguna()
    {
        return $this->hasOne(BiodataPengguna::class, 'id_pengguna', 'id_pengguna');
    }

    /**
     * Relasi dengan tabel banten.
     */
    public function banten()
    {
        return $this->hasMany(Banten::class, 'id_pengguna', 'id_pengguna');
    }
}
