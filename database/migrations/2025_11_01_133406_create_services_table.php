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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('judul1')->nullable();
            $table->text('keterangan1')->nullable();
            $table->string('icon')->nullable();
            $table->string('judul_pelayanan')->nullable();
            $table->text('keterangan_pelayanan')->nullable();
            $table->string('pesan')->nullable();
            $table->text('keterangan_pesan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
