<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminsTable extends Migration {
public $timestamps = false;
	public function up()
	{
		Schema::create('Admins', function(Blueprint $table) {
			$table->increments('id');
			
		});
	}

	public function down()
	{
		Schema::drop('Admins');
	}
}