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
            $table->string('nama_awalan', 100);
            $table->string('email', 255);
            $table->enum('jenis_tiket', ['Lokal', 'Mancanegara']);
            $table->enum('metode_pembayaran', ['Gopay', 'QRIS'])->default('Gopay');
            $table->unsignedInteger('jumlah_tiket');
            $table->unsignedInteger('total_harga');
            $table->enum('status_pembayaran', ['Ditolak', 'Ditunggu', 'Diterima'])->default('Ditunggu');
            $table->string('bukti_pembayaran', 255)->nullable();
            $table->date('tanggal_berlaku');
            $table->date('tanggal_kadaluarsa');
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
