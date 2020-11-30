<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePratanamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pratanam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('padi_id');
            $table->date('tgl_persemaian');
            $table->integer('banyak_benih');
            $table->string('jenis_tanah', 30);
            $table->timestamps();

            $table->foreign('padi_id')
                ->references('id')
                ->on('padi')
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
        Schema::dropIfExists('pratanam');
    }
}
