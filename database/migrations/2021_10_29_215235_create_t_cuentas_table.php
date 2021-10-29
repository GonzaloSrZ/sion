<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_cuentas', function (Blueprint $table) {
            $table->id();
            $table->string('Plan');
            $table->integer('Grupo');
            $table->integer('N_Sorteo1');
            $table->integer('N_Sorteo2');
            $table->integer('N_Sorteo3');
            $table->integer('N_Sorteo4');
            $table->integer('C_Cuotas');
            $table->string('P_Cuotas');
            $table->string('Entrega');
            $table->integer('Precio_Total');
            $table->string('Vencimiento');
            $table->integer('N_Cuotas');
            $table->string('Situacion');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('t_clientes');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('t_productos');
            $table->unsignedBigInteger('id_vendedor');
            $table->foreign('id_vendedor')->references('id')->on('t_vendedores');
            $table->unsignedBigInteger('id_cobrador');
            $table->foreign('id_cobrador')->references('id')->on('t_cobradores');
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
        Schema::dropIfExists('t_cuentas');
    }
}
