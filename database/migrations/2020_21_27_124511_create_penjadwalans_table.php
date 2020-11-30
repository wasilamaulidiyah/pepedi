<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjadwalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pratanam_id')->nullable();
            $table->unsignedBigInteger('pascatanam_id')->nullable();
            $table->unsignedBigInteger('tanam_id')->nullable();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('nama_proses');
            $table->text('tips_dan_trik');
            $table->timestamps();

            $table->foreign('pratanam_id')
                ->references('id')
                ->on('pratanam')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('pascatanam_id')
                ->references('id')
                ->on('pascatanam')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('tanam_id')
                ->references('id')
                ->on('tanam')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjadwalan');
    }
}
