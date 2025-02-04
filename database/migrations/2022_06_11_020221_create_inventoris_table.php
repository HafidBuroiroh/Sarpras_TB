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
        Schema::create('inventori', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang_id', 5)->references('kode_barang')->on('barangs');
            $table->integer('stock');
            $table->integer('jumlah_tersedia');
            $table->integer('jumlah_rusak');
            $table->integer('jumlah_pinjam');
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
        Schema::dropIfExists('inventori');
    }
};
