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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); 

            $table->foreignId('user_id') 
                  ->constrained('users') 
                  ->onDelete('cascade'); 

            $table->foreignId('doctor_id') 
                  ->constrained('doctors') 
                  ->onDelete('cascade'); 

            // Detail Janji Temu
            $table->dateTime('appointment_time'); 
            $table->text('notes')->nullable();

            // Status Janji Temu
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'completed'])->default('pending');

            // Timestamp
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
