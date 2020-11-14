<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasPengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Berkas_pengajuan', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('Id_berkaspengajuan');
            $table->unsignedInteger('Id_pengajuan');
            $table->foreign('Id_pengajuan')->references('Id_pengajuan')->on('Pengajuan')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('Id_berkas');
            $table->foreign('Id_berkas')->references('Id_berkas')->on('Berkas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Nama_berkas', 20);
            $table->integer('Jumlah_berkas');
            $table->integer('Harga'); 
            $table->integer('Harga_total');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berkas__pengajuans');
    }
}
