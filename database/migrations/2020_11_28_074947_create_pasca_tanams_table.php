<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePascaTanamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pascatanam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('padi_id');
            $table->date('tgl_panen');
            $table->string('kondisi_gabah');
            
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
        Schema::dropIfExists('pascatanam');
    }
}
