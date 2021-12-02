<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('produk_id')->CONSTRAINED();
            $table->foreignId('user_id')->CONSTRAINED();
            $table->foreignId('ekspedisi_id')->CONSTRAINED();
            $table->foreignId('metode_pembayaran_id')->CONSTRAINED();
            $table->Integer('kuantitas');
            $table->foreignId('varian_id')->CONSTRAINED();
            $table->String('message');
            $table->String('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
