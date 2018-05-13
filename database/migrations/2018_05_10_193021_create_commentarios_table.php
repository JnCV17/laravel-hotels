<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatecommentariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contenido');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_hotel')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_hotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commentarios');
    }
}
