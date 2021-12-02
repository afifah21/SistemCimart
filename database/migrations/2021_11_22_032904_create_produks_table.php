<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('nama_produk');
            $table->String('file_path_produk'); //buat foto
            $table->Integer('jumlah_stok');
            $table->String('deskripsi_produk');
            $table->String('varian');
            $table->Integer('harga');
            $table->foreignId('kategori_id')->CONSTRAINED();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
