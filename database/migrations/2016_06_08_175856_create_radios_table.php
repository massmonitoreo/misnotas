<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
           $table->increments('id');
           $table->string('programa');
           $table->string('conductor');
           $table->string('estacion');
           $table->string('horario');
           $table->string('cobertura');
           $table->string('comentario');
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
        Schema::drop('radios');
    }
}
