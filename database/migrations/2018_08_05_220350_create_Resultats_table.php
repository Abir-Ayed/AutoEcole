<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultatsTable extends Migration {
    public $timestamps = false;

	public function up()
	{
		Schema::create('Resultats', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('examen_id')->unsigned();
            $table->foreign('examen_id')->references('id')->on('examens');
        
			$table->string('candidat');
			$table->float('note_examen1');
			$table->float('note_examen2');
			$table->string('etat');
		    $table->string('description');
		});
	}

	public function down()
	{
		Schema::drop('Resultats');
	}
}