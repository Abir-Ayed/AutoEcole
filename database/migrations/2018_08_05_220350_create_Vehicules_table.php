<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculesTable extends Migration {

	public function up()
	{
		Schema::create('vehicules', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('moniteur_id')->unsigned();
			$table->foreign('moniteur_id')->references('id')->on('moniteurs');
			$table->string('Vehicule');
			$table->string('Matricule');
			$table->string('Modele');
		});
	}

	public function down()
	{
		Schema::drop('Vehicules');
	}
}