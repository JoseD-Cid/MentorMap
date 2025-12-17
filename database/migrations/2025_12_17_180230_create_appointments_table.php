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
            $table->timestamp('scheduled_at');
            $table->enum('status', ['scheduled', 'completed', 'canceled'])->default('scheduled');
            //Foreing Key
            $table->foreignId('mentor_id')->constrained(table: 'mentors')->noActionOnDelete();
            $table->foreignId('student_id')->constrained(table: 'students')->noActionOnDelete();

            //Logs Fields
            $table->timestamps(); 
            $table->softDeletes(); 
            $table->integer('created_by')->nullable();  
            $table->integer('updated_by')->nullable(); 
            $table->integer('deleted_by')->nullable();
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
