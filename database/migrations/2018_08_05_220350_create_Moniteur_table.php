<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoniteurTable extends Migration {
    public $timestamps = false;
	public function up()
	{
		Schema::create('moniteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->date('date_naissance');
			$table->string('sexe');
			$table->string('Num_tel');

		});
	}

	public function down()
	{
		Schema::drop('moniteurs');
	}
}