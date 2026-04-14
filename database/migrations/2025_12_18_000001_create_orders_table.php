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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            // Data Pemesanan
            $table->string('nama_awalan', 100);
            $table->string('email', 255);
            $table->enum('tenis_tiket', ['Lokal', 'Mancanegara']);
            $table->enum('metode_pembayaran', ['Gopay', 'QRIS'])->default('Gopay');
            
            // Detail Pembayaran
            $table->unsignedInteger('jumlah_tiket');
            $table->unsignedInteger('total_harga');
            $table->enum('status_pembayaran', ['Ditolak', 'Ditunggu', 'Diterima'])->default('Ditunggu');
            
            // Bukti & Tanggal
            $table->string('bukti_pembayaran', 255)->nullable();
            $table->date('tanggal_berlaku')->nullable();
            $table->date('tanggal_kadaluarsa')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
