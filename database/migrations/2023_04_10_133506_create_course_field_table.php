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
        Schema::create('course_field', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('field_id')->constrained();
            // $table->foreignId('course_id')->constrained()
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            // $table->foreignId('field_id')->constrained()
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_course');
    }
};
