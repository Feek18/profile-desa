<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nama', 100);
            $table->string('password');
            $table->string('telp', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('masyarakat');
    }
};
