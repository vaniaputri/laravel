<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kepala_keluarga');
            $table->string('alamat');
            $table->string('rt/rw');
            $table->string('desa/kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten/kota');
            $table->string('kode_pos');
            $table->string('provinsi');
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
        Schema::dropIfExists('data_kk');
    }
}
