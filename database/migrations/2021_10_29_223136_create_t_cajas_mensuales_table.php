<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCajasMensualesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_cajas_mensuales', function (Blueprint $table) {
            $table->id();
            $table->integer('efectivo');
            $table->integer('transferencias');
            $table->integer('extras');
            $table->integer('egreso');
            $table->integer('total');
            $table->integer('total_neto');
            $table->string('tipo');
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
        Schema::dropIfExists('t_cajas_mensuales');
    }
}
