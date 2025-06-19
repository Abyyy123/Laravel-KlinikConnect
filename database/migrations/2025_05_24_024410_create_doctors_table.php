<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id(); // ID unik untuk setiap dokter

            // Informasi Dasar Dokter
            $table->string('name'); 
            $table->string('specialization'); 
            $table->string('education')->nullable(); 
            $table->string('experience_years')->nullable(); 
            $table->text('bio')->nullable(); 
            $table->string('gender')->nullable(); 

            // Informasi Kontak dan Identifikasi
            $table->string('sip_number')->unique()->nullable(); 
            $table->string('phone_number')->nullable(); 
            $table->string('email')->unique(); 

            // Informasi Lokasi
            $table->text('clinic_address')->nullable(); 
            $table->string('city')->default('Jakarta'); 

            // Ketersediaan dan Jadwal
            $table->string('work_days')->nullable(); 
            $table->string('work_hours')->nullable(); 

            // Status
            $table->boolean('is_active')->default(true); 

            // Timestamp
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
