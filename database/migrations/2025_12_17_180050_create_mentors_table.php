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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude_aprox', total: 24, places: 20)->default(0.0);
            $table->decimal('longitude_aprox', total: 24, places: 20)->default(0.0);
            
            //Foreign Key
            $table->foreignId('user_id')->constrained(table: 'users')->unique();

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
        Schema::dropIfExists('mentors');
    }
};
