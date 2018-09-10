<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatsTable extends Migration {
    public $timestamps = false;

	public function up()
	{
		Schema::create('Candidats', function(Blueprint $table) {
			$table->increments('id');

            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('sexe');
            $table->string('Num_tel');
            $table->string('Email');


        });
	}

	public function down()
	{
		Schema::drop('Candidats');
	}
}