<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertesTable extends Migration {
    public $timestamps = false;

	public function up()
	{
		Schema::create('Alertes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('vehicule_id')->unsigned();
			$table->foreign('vehicule_id')->references('id')->on('vehicules');
		    $table->date('Date_pre');
			$table->date('Date_pro');
            $table->string('Type');
            $table->string('Description');

		});
	}

	public function down()
	{
		Schema::drop('Alertes');
	}
}