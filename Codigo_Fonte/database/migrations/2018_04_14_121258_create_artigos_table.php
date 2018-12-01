<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('horario');
            $table->string('local');
            $table->string('tipo_trabalho');
            $table->string('area');
            $table->string('tema');
            $table->string('titulo');
            $table->string('resumo');
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
        Schema::dropIfExists('artigo');
    }
}
