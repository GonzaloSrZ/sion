<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_personals', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('sueldo');
            $table->date('hora_mañana');
            $table->date('hora_tarde');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('tipo');
            $table->unsignedBigInteger('id_user')->nullable();
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
        Schema::dropIfExists('t_personals');
    }
}
