<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelMapelSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapel_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswa')->onDelete('CASCADE');
            $table->unsignedInteger('id_mapel');
            $table->foreign('id_mapel')->references('id')->on('mapel')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapel_siswa');
    }
}
