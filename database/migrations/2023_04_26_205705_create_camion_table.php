<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camions', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('placa_camion', 6);
            $table->string('marca', 25);
            $table->string('color', 25);
            $table->year('modelo');
            $table->integer('capacidad_toneladas');
            $table->unsignedBigInteger('transporte_codigo')->nullable();
            $table->foreign('transporte_codigo')->references('id')->on('transportes')->onDelete('no action');
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
        Schema::dropIfExists('camion');
    }
}
