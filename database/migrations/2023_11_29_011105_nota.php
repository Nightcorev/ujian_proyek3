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
        Schema::create('nota', function (Blueprint $table) {
            $table->string('KodeNota')->primary();
            $table->string('KodeTenan');
            $table->foreign('KodeTenan')->references('KodeTenan')->on('tenan');
            $table->string('KodeKasir');
            $table->foreign('KodeKasir')->references('KodeKasir')->on('kasir');
            $table->date('TglNota');
            $table->integer('JumlahBelanja');
            $table->float('Diskon');
            $table->float('Total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
