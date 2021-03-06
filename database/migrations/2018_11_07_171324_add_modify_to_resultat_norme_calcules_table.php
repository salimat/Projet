<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToResultatNormeCalculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultat_norme_calcules', function (Blueprint $table) {
            // $table->unsignedInteger('id_resultat');

           $table->foreign('resultats_id')->references('id')->on('resultats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultat_norme_calcules', function (Blueprint $table) {
            $table->dropForeign('resultats_id');
        });
    }
}
