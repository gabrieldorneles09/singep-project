<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePalestrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palestrante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('participante_id')->unsigned();
            $table->string('cidade');
            $table->string('estado');
            // os seguinte comentados sao informacao repetida
            // $table->string('email')->unique();
            // $table->string('filiacao');
            $table->string('curriculo');
            $table->string('url_imagem');
            $table->softDeletes();
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
        Schema::dropIfExists('palestrante');
    }
}
