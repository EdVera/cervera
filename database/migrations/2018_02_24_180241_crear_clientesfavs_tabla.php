<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearClientesfavsTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientesfavs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->integer('telefono');
            $table->string('calle');
            $table->integer('comunidad')->unsigned();
            $table->foreign('comunidad')->references('id')->on('comunidades')->onDelete('cascade');
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
        Schema::dropIfExists('clientesfavs');
    }
}
