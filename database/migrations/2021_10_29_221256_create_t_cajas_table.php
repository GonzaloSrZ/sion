<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_cajas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('monto');
            $table->string('i_e');
            $table->string('tipo_pago');
            $table->timestamps();
            $table->unsignedBigInteger('id_caja_diaria')->nullable();
            $table->foreign('id_caja_diaria')->references('id')->on('t_cajas_diarias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_cajas');
    }
}
