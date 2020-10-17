<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetalleRecolecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('detalle_recolecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_punto_reciclaje');
            $table->foreign('id_punto_reciclaje')->references('id')->on('punto_reciclaje');
            $table->unsignedBigInteger('id_recolectores');
            $table->foreign('id_recolectores')->references('id')->on('recolectores');
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
