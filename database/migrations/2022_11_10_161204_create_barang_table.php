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
        Schema::create('barang', function (Blueprint $table) {
            $table->string('id_barang', 150)->unique()->primary();
            $table->string('nama_barang', 200);
            $table->integer('kategori_barang');
            $table->integer('harga_satuan');
            $table->integer('berat');
            $table->integer('stock');
            $table->integer('pembelian_minimum');
            $table->enum('kondisi_barang', ['baru', 'bekas']);
            $table->longText('deskripsi_barang');
            $table->integer('id_penjual');
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
        Schema::dropIfExists('barang');
    }
};
