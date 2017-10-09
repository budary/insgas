<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsGasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ins_gas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('numero',4);
            $table->string('placa')->unique();
            $table->string('nombre');
            $table->string('modelo');
            $table->string('telefono');
            $table->date('fecha');

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
        Schema::dropIfExists('ins_gas');
    }
}
