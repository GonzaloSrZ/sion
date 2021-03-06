<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLiquidacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_liquidaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('sueldo');
            $table->integer('adelanto');
            $table->integer('premio');
            $table->integer('descuento');
            $table->timestamps();
            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('t_personals');
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
        Schema::dropIfExists('t_liquidaciones');
    }
}
