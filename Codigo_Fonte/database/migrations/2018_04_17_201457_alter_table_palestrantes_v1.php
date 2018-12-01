<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTablePalestrantesV1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('palestrante', function (Blueprint $table){
        $table->foreign('participante_id','palestrante_participante_id_fk')->references('id')->on('participante');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('palestrante', function(Blueprint $table) {
          $table->dropForeign('palestrante_participante_id_fk');
      });
    }
}
