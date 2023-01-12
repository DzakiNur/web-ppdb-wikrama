<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('nisn');
            $table->string('jk');
            $table->string('nama');
            $table->string('sekolah')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('email');
            $table->char('no_hp');
            $table->char('no_hp_ayah');
            $table->char('no_hp_ibu');
            $table->string('referensi');
            // $table->string('nama_pegawai_wikrama');
            // $table->string('nama_siswa');
            // $table->string('rayon');
            // $table->string('nama_alumni');
            // $table->char('tahun_lulus_alumni');
            // $table->string('nama_guru_smp');
            // $table->string('nama_smp');
            // $table->char('referensi_no_seleksi');
            // $table->string('referensi_nama_siswa');
            // $table->string('nama_guru_smp');
            // $table->string('nama_guru_smp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
