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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id('habitacion_numero');
            $table->double('precio_por_noche');
            $table->integer('piso');
            $table->integer('max_personas')->length('10');
            $table->integer('tiene_cama_base')->length('10');
            $table->integer('tiene_ducha')->length('10');
            $table->integer('tiene_bano')->length('10');
            $table->integer('tiene_balcon')->length('10');






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
        Schema::dropIfExists('habitaciones');
    }
};
