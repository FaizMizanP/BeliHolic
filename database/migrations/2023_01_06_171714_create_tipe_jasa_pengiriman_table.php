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
        Schema::create('tipe_jasa_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jasa_pengiriman');
            $table->foreign('id_jasa_pengiriman') ->references('id')->on('jasa_pengiriman')->onDelete('cascade');
            $table->string('nama_tipe');
            $table->bigInteger('harga_tipe');
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
        Schema::dropIfExists('tipe_jasa_pengiriman');
    }
};
