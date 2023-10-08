<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            // No	Nama Sesuai KTP	Tanggal Lahir	Jenis Kelamin	Alamat Lengkap Sesuai KTP				Alamat Lengkap Tempat Berusaha				Bidang Usaha	NIB/SKU	Status Pekerjaan	Telpon Seluler
            // 	Propinsi	Kab/Kota	Kecamatan	Desa/Kel/ RT, RW	Propinsi	Kab/Kota	Kecamatan	Desa/Kel/ RT, RW

            $table->id();
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('provinsi1');
            $table->string('kab1');
            $table->string('kec1');
            $table->string('desa1`');
            $table->string('provinsi2');
            $table->string('kab2');
            $table->string('kec2');
            $table->string('desa2');
            $table->string('bidang_usaha');
            $table->string('nib');
            $table->string('status');
            $table->string('telp');
            $table->string('gambar');
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
        Schema::dropIfExists('umkm');
    }
}
