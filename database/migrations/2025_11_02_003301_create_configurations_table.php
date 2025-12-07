<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     */
    public function up(): void
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('icon_images')->nullable();
            $table->string('nama_website')->nullable();
            $table->text('overview')->nullable();
            $table->string('judul_about')->nullable();  
            $table->text('keterangan_about')->nullable();
            $table->string('judul_services')->nullable();
            $table->text('keterangan_services')->nullable();
            $table->string('judul_portofolio')->nullable();
            $table->text('keterangan_portofolio')->nullable();
            $table->string('judul_contact')->nullable();
            $table->text('keterangan_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations');
    }
};
