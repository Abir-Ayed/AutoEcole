<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
     public $timestamps = false;

    public function up()
    {
        Schema::create('Factures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paiement_id')->unsigned();
            $table->foreign('paiement_id')->references('id')->on('paiements');
            $table->date('date_facture');
            $table->integer('montant_paye');
            $table->integer('montant_restant');
            $table->integer('montant_totale');
            $table->string('liste_candidat');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Factures');
    }
}
