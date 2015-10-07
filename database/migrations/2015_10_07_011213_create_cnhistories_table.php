<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnhistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnhistories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            // Datos personales
            $table->string('ms')->nullable();
            $table->string('oc')->nullable();
            $table->string('sc')->nullable();
            $table->string('re')->nullable();
            // Indicadores clinicos
            $table->string('sd')->nullable();
            $table->string('hm')->nullable();
            $table->string('dt')->nullable();
            $table->string('sw')->nullable();
            $table->string('or')->nullable();
            $table->string('ud')->nullable();
            $table->string('wd')->nullable();
            //Antecedentes de Salud Enfermedad
            $table->boolean('ap1')->nullable();
            $table->boolean('ap2')->nullable();
            $table->boolean('ap3')->nullable();
            $table->boolean('ap4')->nullable();
            $table->boolean('ap5')->nullable();
            $table->boolean('ap6')->nullable();
            $table->boolean('ap7')->nullable();
            $table->boolean('ap8')->nullable();
            $table->string('te')->nullable();
            $table->string('dd')->nullable();
            $table->string('im')->nullable();
            $table->string('usd')->nullable();
            $table->string('whd')->nullable();
            $table->string('swu')->nullable();
            $table->string('sur')->nullable();
            // Antecedentes heredo-familiares
            $table->boolean('obe')->nullable();
            $table->boolean('can')->nullable();
            $table->boolean('dia')->nullable();
            $table->boolean('ahi')->nullable();
            $table->boolean('hip')->nullable();
            $table->boolean('hep')->nullable();
            //Actividades
            $table->boolean('fia')->nullable();
            $table->string('ext')->nullable();
            $table->string('fre')->nullable();
            $table->string('dur')->nullable();
            $table->string('wst')->nullable();
            $table->string('smo')->nullable();
            $table->string('dal')->nullable();
            $table->string('dco')->nullable();

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
        Schema::drop('cnhistories');
    }
}
