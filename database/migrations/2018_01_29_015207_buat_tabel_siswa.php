<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('nis');
            $table->unsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('CASCADE');
            $table->unsignedInteger('id_guru');
            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
