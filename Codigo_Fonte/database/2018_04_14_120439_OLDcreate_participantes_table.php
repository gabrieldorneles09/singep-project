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
        Schema::create('participante_old', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('cpf',12)->unique();
            $table->string('telefone');
            $table->string('filiacao');
            $table->string('permissao',1);


            //permissao
            $table->string('status',1)->nulllabel();
            // $table->string('permissao')->default('app.user')->nulllabel();

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
        Schema::dropIfExists('participante_old');
    }
}
