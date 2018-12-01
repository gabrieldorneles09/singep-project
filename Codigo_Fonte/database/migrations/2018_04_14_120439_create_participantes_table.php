<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('telefone');
            $table->string('filiacao');
            // $table->string('perfil',1);  //no momento não usando

            //permissao
            $table->string('status')->default('1');
            // $table->string('permissao')->default('app.user')->nulllabel();
            $table->string('permissao');

            $table->rememberToken();
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
        Schema::dropIfExists('participante');
    }
}
