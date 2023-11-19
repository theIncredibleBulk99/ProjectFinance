<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->timestamps();
            $table->string('nama_transaksi');
            $table->date('tanggal_transaksi');
            $table->bigInteger('jumlah_transaksi');
            $table->string('jenis_transaksi');
            $table->string('bukti_transaksi');
            $table->string('pihak_terlibat');
            $table->string('catatan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
