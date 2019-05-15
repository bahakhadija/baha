<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_prenom');
            $table->string('cin')->unique();
            $table->string('telephone');
            $table->string('adresse');
            $table->string('email')->unique();
           
            $table->dateTime('date_ajout');
            $table->rememberToken();
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
        Schema::dropIfExists('personnes');
    }
}
