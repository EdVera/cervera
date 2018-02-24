<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearPaquetesTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paqueteID');
            $table->string('nombre');
            $table->string('apPaterno');
            $table->string('apMaterno');
            $table->integer('telefono');
            $table->string('calle');
            $table->boolean('pago');
            $table->integer('monto');
            $table->integer('pesoTotal');
            $table->text('observaciones');
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
        Schema::dropIfExists('paquetes');
    }
}
