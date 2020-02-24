<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDetailKk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_detail_kk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('data_kk_id');
            $table->string('nomor');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('jenis_pekerjaan');
            $table->string('status_pernikahan');
            $table->string('status_dlm_keluarga');
            $table->string('kewarganegaraan');
            $table->string('paspor');
            $table->string('kitas');
            $table->string('nama_ayah');                   
            $table->string('nama_ibu');
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
        Schema::dropIfExists('data_detail_kk');
    }
}
