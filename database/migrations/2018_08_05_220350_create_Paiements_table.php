<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementsTable extends Migration {
    public $timestamps = false;

	public function up()
	{
		Schema::create('Paiements', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('candidat_id')->unsigned();
            $table->foreign('candidat_id')->references('id')->on('candidats');
        
			$table->date('date_operation');
			$table->integer('montant');
            $table->string('mode_paiement');
			$table->string('description');


		});
	}

	public function down()
	{
		Schema::drop('Paiements');
	}
}