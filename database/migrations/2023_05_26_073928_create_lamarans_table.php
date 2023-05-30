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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->string('nama');
            $table->string('email');
            $table->text('pesan');
            $table->enum('status', ['terkirim', 'dalam_review', 'tidak_lolos'])->default('terkirim');
            $table->string('cv_path')->nullable();
            $table->string('surat_lamaran_path')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
