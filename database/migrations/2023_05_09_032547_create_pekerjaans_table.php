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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('judul_pekerjaan');
            $table->string('pt_id');
            $table->string('status_pekerjaan');
            $table->string('start_salary');
            $table->string('end_salary');
            $table->string('expected_experience', 10);
            $table->string('fungsi_kerja');
            $table->string('level');
            $table->string('lulusan');
            $table->text('deskripsi');
            $table->text('kualifikasi');
            $table->text('benefits');
            $table->text('about');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaans');
    }
};
