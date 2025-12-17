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
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            //Foreign Key
            $table->foreignId('mentor_id')->constrained(table: 'mentors');
            $table->foreignId('subject_id')->constrained(table: 'subjects');

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
        Schema::dropIfExists('topics');
    }
};
