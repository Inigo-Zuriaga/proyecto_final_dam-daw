<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabladatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabladatos', function (Blueprint $table) {
            //Opciones de tabla
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            //Columnas
            $table->tinyIncrements('id_partida')->autoIncrement();
            $table->string('usuario', 32)->nullable(false);
            $table->int('frutas',5)->nullable(false)->default(0);
            $table->int('enemigos',5)->nullable(false)->default(0);
            $table->int('ult_distancia',10)->nullable(false)->default(0);
            $table->dateTime('fecha_record')->nullable();
            $table->int('record',10)->nullable(false)->default(0);
            $table->tinyInteger('numero_partidas',)->nullable(false)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabladatos');
    }
}
