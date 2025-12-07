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
        Schema::table('homes', function (Blueprint $table) {
            $table->string('judul1')->after('id')->required();
            $table->string('judul2')->after('judul1')->required();
            $table->string('deskripsi_judul1')->after('judul2')->nullable();
            $table->string('deskripsi_judul2')->after('deskripsi_judul1')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->dropColumn(['judul1', 'judul2', 'deskripsi_judul1', 'deskripsi_judul2']);
        });
    }
};
