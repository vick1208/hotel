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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipe_id')->constrained('tipe');
            $table->foreignId('status_kamar_id')->constrained('status_kamar');
            $table->string('nomor');
            $table->bigInteger('kapasitas');
            $table->double('harga');
            $table->longText('pemandangan');
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
        Schema::dropIfExists('kamar');
    }
};
