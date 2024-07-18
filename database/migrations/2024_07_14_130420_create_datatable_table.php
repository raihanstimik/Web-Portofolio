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
        Schema::create('datatable', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
=======
            $table->string('nama');
            $table->string('provinsi');
            $table->string('email');
            $table->text('isi')->nullable();
            $table->string('posisi');
            $table->string('perusahaan');
            $table->date('tgl_masuk')->nullable();
            $table->date('tgl_keluar')->nullable();
            $table->text('jobdesk')->nullable();
            $table->string('sekolah')->nullable();
            $table->string('jurusan')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->float('ipk', 3, 2)->nullable();
            $table->text('softskill')->nullable();
            $table->text('hardskill')->nullable();
            $table->text('bahasa')->nullable();
>>>>>>> 2635405051020312202f8c6ed4b194affa64c9c6
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datatable');
    }
};
