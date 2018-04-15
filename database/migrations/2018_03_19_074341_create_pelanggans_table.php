<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePelanggansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama_Pemilik');
            $table->string('Nama_Kucing');
            $table->string('Jenis_Kucing');
            $table->string('Nomor_Telepon');
            $table->string('Alamat');
            $table->string('Tanggal_Masuk');
            $table->string('Pesan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pelanggans');
    }
}
