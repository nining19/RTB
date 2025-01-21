<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID
            $table->foreignId('user_id')->nullable()->index(); // Foreign key untuk pengguna
            $table->string('ip_address', 45)->nullable(); // IP pengguna
            $table->text('user_agent')->nullable(); // Informasi browser pengguna
            $table->text('payload'); // Data sesi
            $table->integer('last_activity')->index(); // Waktu aktivitas terakhir
        });

        // Tabel Pengguna
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna'); // Primary key
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('email', 100)->nullable();
            $table->timestamps();
        });

        // Tabel Biodata Pengguna
        Schema::create('biodata_pengguna', function (Blueprint $table) {
            $table->id('id_biodata'); // Primary key
            $table->unsignedBigInteger('id_pengguna'); // Foreign key
            $table->string('nama', 100);
            $table->string('no_tlp', 20)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->text('foto_profil')->nullable();
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
        });

        // Tabel Doa
        Schema::create('doa', function (Blueprint $table) {
            $table->id('id_doa'); // Primary key
            $table->string('mantra_doa', 255);
            $table->string('terjemahan', 255)->nullable();
            $table->text('audio_path')->nullable();
            $table->timestamps();
        });

        // Tabel Banten
        Schema::create('banten', function (Blueprint $table) {
            $table->id('id_banten'); // Primary key
            $table->unsignedBigInteger('id_pengguna'); // Foreign key
            $table->string('nama_banten', 100);
            $table->string('deskripsi_banten', 255)->nullable();
            $table->text('img_path')->nullable();
            $table->text('video_path')->nullable();
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banten');  // Drop banten table
        Schema::dropIfExists('doa');     // Drop doa table
        Schema::dropIfExists('biodata_pengguna'); // Drop biodata_pengguna table
        Schema::dropIfExists('pengguna'); // Drop pengguna table
    }
};
