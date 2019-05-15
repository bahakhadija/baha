<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsommationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consommations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('annee');
            $table->integer('mois');
            $table->double('montant');
            $table->bigInteger('quantite');
            $table->double('redevance_fix');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consommations');
    }
}
