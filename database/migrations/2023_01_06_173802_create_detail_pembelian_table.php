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
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembelian');
            $table->foreign('id_pembelian') ->references('id')->on('pembelian')->onDelete('cascade');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang') ->references('id')->on('barangs')->onDelete('cascade');
            $table->integer('harga_barang');
            $table->integer('jumlah_barang');
            $table->integer('total_harga');
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
        Schema::dropIfExists('detail_pembelian');
    }
};
