<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModerateursTable extends Migration {

	public function up()
	{
		Schema::create('Moderateurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('Moderateurs');
	}
}