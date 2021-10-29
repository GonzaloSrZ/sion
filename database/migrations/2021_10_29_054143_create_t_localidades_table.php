<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLocalidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_localidades', function (Blueprint $table) {
            $table->id();
            $table->string('localidad');
            $table->timestamps();
            $table->integer('id_cobrador');
            $table->foreign('id_cobrador')->references('id')->on('t_cobradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_localidades');
    }
}
