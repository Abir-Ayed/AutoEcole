<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonnesTable extends Migration {

	public function up()
	{
		Schema::create('Personnes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('prenom', 255);
			$table->string('nom', 255);
			$table->string('Date_de_naissance', 255);
			$table->string('sexe', 10);
			$table->string('Email');
			$table->string('Num_tel', 255);
            $table->string('Role', 255);
		});
	}

	public function down()
	{
		Schema::drop('Personnes');
	}
}