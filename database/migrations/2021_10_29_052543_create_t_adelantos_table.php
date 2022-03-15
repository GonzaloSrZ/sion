<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdelantosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_adelantos', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->timestamps();
            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('t_personals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_adelantos');
    }
}
