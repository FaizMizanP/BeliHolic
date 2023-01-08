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
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id(); 
            $table->string('alamat_penerima');
            $table->unsignedBigInteger('id_tipe_jasa_pengiriman');
            $table->foreign('id_tipe_jasa_pengiriman') ->references('id')->on('tipe_jasa_pengiriman')->onDelete('cascade');
            $table->string('metode_pembayaran');
            $table->string('nama_bank')->nullable();
            $table->string('nomor_rekening')->nullable();
            $table->bigInteger('total_pembayaran');
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
        Schema::dropIfExists('pembelian');
    }
};
