<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petugas', 100);
            $table->string('username', 50);
            $table->string('password');
            $table->string('telp', 15)->nullable();
            $table->enum('role', ['admin', 'editor', 'user']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('petugas');
    }
};
