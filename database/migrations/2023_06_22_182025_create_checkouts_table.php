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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('produk_id');
            $table->integer('penjual_id');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('ukuran');
            $table->string('varian');
            $table->string('metode_pembayaran');
            $table->string('bukti_pembayaran');
            $table->string('alamat');
            $table->string('no');
            $table->string('status_pengiriman')->nullable();
            $table->string('bukti_pengiriman')->nullable();
            $table->string('status_pemesanan')->nullable();
            $table->string('bukti_pesanan_selesai')->nullable();
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
        Schema::dropIfExists('checkouts');
    }
};