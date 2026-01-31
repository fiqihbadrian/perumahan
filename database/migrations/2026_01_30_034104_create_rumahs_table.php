<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rumahs', function (Blueprint $table) {
            $table->id();
            $table->string('blok'); // A, B, C, D
            $table->integer('nomor'); // 1-20
            $table->enum('status', ['terisi', 'kosong'])->default('kosong');
            $table->string('penghuni')->nullable(); // Nama penghuni
            $table->string('no_telp')->nullable(); // Nomor telepon
            $table->string('email')->nullable(); // Email penghuni
            $table->integer('jumlah_penghuni')->default(0); // Jumlah anggota keluarga
            $table->text('keterangan')->nullable(); // Catatan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumahs');
    }
};
