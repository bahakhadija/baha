<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agence');
            $table->dateTime('date_deut_paiement');
            $table->dateTime('date_limite');
            $table->double('frais_retard');
            $table->double('net_a_payer');
            $table->string('num_facture')->unique();
            $table->enum('statut_facture', ['impayée', 'payée','en retard']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
