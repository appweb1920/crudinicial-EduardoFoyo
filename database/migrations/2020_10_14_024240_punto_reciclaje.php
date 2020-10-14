<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PuntoReciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punto_reciclaje', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 100);
            $table->string('direccion', 255);
            $table->time('hora_apertura', 0);
            $table->time('hora_cierre', 0);
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
        //
    }
}
