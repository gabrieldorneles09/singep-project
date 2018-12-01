<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAgendaV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('agenda', function (Blueprint $table){
      $table->foreign('participante_id','agenda_participante_id_fk')->references('id')->on('participante');
      $table->foreign('artigo_id','agenda_artigo_id_fk')->references('id')->on('artigo');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('agenda', function(Blueprint $table) {
          $table->dropForeign('agenda_artigo_id_fk');
      });
    }
}
