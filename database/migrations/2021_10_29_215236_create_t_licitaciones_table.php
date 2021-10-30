<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLicitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_licitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('monto');
            $table->timestamps();
            $table->unsignedBigInteger('id_cuenta');
            $table->foreign('id_cuenta')->references('id')->on('t_cuentas');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_licitaciones');
    }
}
