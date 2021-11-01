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
            $table->integer('grupo');
            $table->integer('n_sorteo1')->nullable();
            $table->integer('n_sorteo2')->nullable();
            $table->integer('n_sorteo3')->nullable();
            $table->integer('n_sorteo4')->nullable();
            $table->integer('c_cuotas');
            $table->integer('p_cuotas');
            $table->integer('entrega');
            $table->integer('precio_total');
            $table->string('vencimiento');
            $table->integer('n_cuotas');
            $table->string('situacion');
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('t_clientes');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_producto')->references('id')->on('t_productos');
            $table->unsignedBigInteger('id_vendedor');
            $table->foreign('id_vendedor')->references('id')->on('t_vendedores');
            $table->unsignedBigInteger('id_cobrador');
            $table->foreign('id_cobrador')->references('id')->on('t_cobradores');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
