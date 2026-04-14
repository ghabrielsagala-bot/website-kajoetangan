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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            
            // Identitas Admin
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable(); // Opsi login pakai username
            
            // Kredensial & Keamanan
            $table->string('password');
            $table->rememberToken(); // Untuk fitur "Remember Me"
            
            // Status & Role (Opsional tapi direkomendasikan)
            $table->boolean('is_active')->default(true); // Untuk memblokir admin tanpa hapus data
            $table->string('role')->default('super_admin'); // Contoh: super_admin, editor, moderator
            
            // Timestamp standar (created_at, updated_at)
            $table->timestamps();
            
            // Timestamp login terakhir (Opsional)
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};