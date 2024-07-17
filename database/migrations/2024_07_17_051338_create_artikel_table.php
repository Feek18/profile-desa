<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_petugas');
            $table->date('tanggal_upload');
            $table->string('judul', 255);
            $table->string('gambar', 255)->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();

            $table->foreign('id_petugas')->references('id')->on('petugas')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('artikel');
    }
};
