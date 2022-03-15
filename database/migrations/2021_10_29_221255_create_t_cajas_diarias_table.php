<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCajasDiariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_cajas_diarias', function (Blueprint $table) {
            $table->id();
            $table->integer('i_transf');
            $table->integer('i_efectivo');
            $table->integer('i_ext');
            $table->integer('egresos');
            $table->integer('total');
            $table->integer('total_neto');
            $table->timestamps();
            $table->unsignedBigInteger('id_caja_mensual')->nullable();
            $table->foreign('id_caja_mensual')->references('id')->on('t_cajas_mensuales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_cajas_diarias');
    }
}
