<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableArtigoAutorV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('artigo_autor', function (Blueprint $table){
      $table->foreign('autor_id','autor_autor_id_fk')->references('id')->on('autor');
      $table->foreign('artigo_id','artigo_autor_artigo_id_fk')->references('id')->on('artigo');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artigo_autor', function(Blueprint $table) {
            $table->dropForeign('artigo_autor_autor_id_fk');
        });
        Schema::table('autor_id', function(Blueprint $table) {
            $table->dropForeign('autor_artigo_id_fk');
        });
    }
}
