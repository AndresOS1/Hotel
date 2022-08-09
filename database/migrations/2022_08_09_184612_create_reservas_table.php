<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('reservas_id');
            $table->dateTime('inicio_fecha');
            $table->dateTime('fin_fecha');


            $table->unsignedBigInteger('habitacion');
            $table->unsignedBigInteger('huesped');
            
            $table->foreign('habitacion')->references('habitacion_numero')->on('habitaciones');
            $table->foreign('huesped')->references('huesped_id')->on('huespedes');     

            



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
        Schema::dropIfExists('reservas');
    }
};
