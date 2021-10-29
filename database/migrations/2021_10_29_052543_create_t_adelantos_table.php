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
            $table->integer('id_vendedor');
            $table->foreign('id_vendedor')->references('id')->on('t_vendedores');
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
