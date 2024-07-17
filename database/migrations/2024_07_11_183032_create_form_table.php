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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('provinsi');
            $table->string('email');
            $table->text('isi');
            $table->string('posisi');
            $table->string('perusahaan');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir')->nullable();
            $table->text('jobdesk');
            $table->string('sekolah');
            $table->string('jurusan');
            $table->date('tgl_mulai2');
            $table->date('tgl_akhir2')->nullable();
            $table->string('ipk');
            $table->text('isi2')->nullable();
            $table->text('softskill')->nullable();
            $table->text('hardskill')->nullable();
            $table->text('bahasa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
