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
                $table->boolean('is_admin')->default(false);
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
    
            // Tabel Kategori DOA
            Schema::create('kategori_doa', function (Blueprint $table) {
                $table->id('id_kategori'); // Primary key
                $table->string('nama_kategori', 100);
                $table->timestamps();
            });
    
            // Tabel DOA
            Schema::create('doa', function (Blueprint $table) {
                $table->id('id_doa'); // Primary key
                $table->unsignedBigInteger('id_kategori'); // Foreign key
                $table->string('mantra_doa', 255);
                $table->string('terjemahan', 255)->nullable();
                $table->text('audio_path')->nullable();
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_kategori')->references('id_kategori')->on('kategori_doa')->onDelete('cascade');
            });
    
            // Tabel Markah DOA
            Schema::create('markah_doa', function (Blueprint $table) {
                $table->id('id_markah_doa'); // Primary key
                $table->unsignedBigInteger('id_pengguna'); // Foreign key
                $table->unsignedBigInteger('id_doa'); // Foreign key
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
                $table->foreign('id_doa')->references('id_doa')->on('doa')->onDelete('cascade');
            });
    
            // Tabel Banten
            Schema::create('banten', function (Blueprint $table) {
                $table->id('id_banten'); // Primary key
                $table->unsignedBigInteger('id_pengguna'); // Foreign key
                $table->string('nama_banten', 100);
                $table->string('deskripsi_banten', 255)->nullable();
                $table->text('img_path')->nullable();
                $table->text('video_path')->nullable();
                $table->boolean('status')->default(false);
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
            });
    
            // Tabel Markah Banten
            Schema::create('markah_banten', function (Blueprint $table) {
                $table->id('id_markah_banten'); // Primary key
                $table->unsignedBigInteger('id_pengguna'); // Foreign key
                $table->unsignedBigInteger('id_banten'); // Foreign key
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
                $table->foreign('id_banten')->references('id_banten')->on('banten')->onDelete('cascade');
            });
    
            // Tabel Hari Raya
            Schema::create('hari_raya', function (Blueprint $table) {
                $table->id('id_hari_raya'); // Primary key
                $table->string('nama_hari_raya', 100);
                $table->text('deskripsi')->nullable();
                $table->integer('no_wuku')->nullable();
                $table->string('wewaran', 50)->nullable();
                $table->integer('no_sasih')->nullable();
                $table->integer('tahun_saka')->nullable();
                $table->integer('penanggal')->nullable();
                $table->timestamps();
            });
    
            // Tabel Pengingat
            Schema::create('pengingat', function (Blueprint $table) {
                $table->id('id_pengingat'); // Primary key
                $table->unsignedBigInteger('id_pengguna'); // Foreign key
                $table->unsignedBigInteger('id_hari_raya'); // Foreign key
                $table->string('interval_pengulangan', 50)->nullable();
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade');
                $table->foreign('id_hari_raya')->references('id_hari_raya')->on('hari_raya')->onDelete('cascade');
            });
    
            // Tabel Kalender API
            Schema::create('kalender_api', function (Blueprint $table) {
                $table->id('id_kalender'); // Primary key
                $table->unsignedBigInteger('id_hari_raya'); // Foreign key
                $table->timestamps();
    
                // Definisi foreign key
                $table->foreign('id_hari_raya')->references('id_hari_raya')->on('hari_raya')->onDelete('cascade');
            });
    
            // Tabel Notifikasi
            Schema::create('notifikasi', function (Blueprint $table) {
                $table->id('id_notifikasi'); // Primary key
                $table->unsignedBigInteger('id_pengguna'); // Foreign key
                $table->string('judul_konten', 255);
                $table->text('konten')->nullable();
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
        Schema::dropIfExists('notifikasi');
        Schema::dropIfExists('kalender_api');
        Schema::dropIfExists('pengingat');
        Schema::dropIfExists('hari_raya');
        Schema::dropIfExists('markah_banten');
        Schema::dropIfExists('banten');
        Schema::dropIfExists('markah_doa');
        Schema::dropIfExists('doa');
        Schema::dropIfExists('kategori_doa');
        Schema::dropIfExists('biodata_pengguna');
        Schema::dropIfExists('pengguna');
        Schema::dropIfExists('sessions');
    }
};
