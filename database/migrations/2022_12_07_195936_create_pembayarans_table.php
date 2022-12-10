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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->foreignId('id_user');
            $table->string('total_bayar');
            $table->string('metode_bayar');
            $table->string('pdf_url');
            $table->datetime('tgl_bayar');
            $table->string('status_pembayaran');
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('pesanans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
