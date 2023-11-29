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
        Schema::create('barang_nota', function (Blueprint $table) {
            $table->string('KodeNota');
            $table->string('KodeBarang');
            $table->foreign('KodeNota')->references('KodeNota')->on('nota');
            $table->foreign('KodeBarang')->references('KodeBarang')->on('barang');
            $table->integer('JumlahBarang');
            $table->float('HargaSatuan');
            $table->float('Jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barnag_nota');
    }
};
