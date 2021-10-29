<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('DNI')->unique();
            $table->string('Nombre_Apellido');
            $table->string('Direccion');
            $table->string('Localidad');
            $table->string('Provincia');
            $table->string('Telefono_1');
            $table->string('Telefono_2')->nullable();
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
        Schema::dropIfExists('t_clientes');
    }
}
