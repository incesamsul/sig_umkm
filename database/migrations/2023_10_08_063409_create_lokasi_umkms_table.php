<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiUmkmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_umkm', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('umkm_id');
            $table->string('lat');
            $table->string('long');
            $table->timestamps();
            $table->foreign('umkm_id')->references('id')->on('umkm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasi_umkm');
    }
}
