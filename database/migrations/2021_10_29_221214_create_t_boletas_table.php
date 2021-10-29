<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_boletas', function (Blueprint $table) {
            $table->id();
            $table->integer('Codigo');
            $table->string('Socio');
            $table->string('Provincia');
            $table->string('Direccion');
            $table->string('Vencimiento');
            $table->string('Plan');
            $table->integer('P_Cuota');
            $table->integer('C_Cuotas');
            $table->integer('N_Cuota');
            $table->string('Situacion');
            $table->dateTime('Fecha_P');
            $table->String('L_Pago');
            $table->timestamps();
            $table->integer('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('t_clientes');
            $table->integer('id_cuenta');
            $table->foreign('id_cuenta')->references('id')->on('t_cuentas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_boletas');
    }
}
