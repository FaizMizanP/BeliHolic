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
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_barang', 200);
            $table->integer('kategori_barang')->nullable();
            $table->integer('harga_satuan');
            $table->integer('berat');
            $table->integer('stock');
            $table->enum('kondisi_barang', ['baru', 'bekas']);
            $table->longText('deskripsi_barang');
            $table->bigInteger('id_penjual');
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
        Schema::dropIfExists('barangs');
    }
};
