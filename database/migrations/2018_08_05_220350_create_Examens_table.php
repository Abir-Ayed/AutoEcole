<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamensTable extends Migration {
    public $timestamps = false;
	public function up()
	{
		Schema::create('Examens', function(Blueprint $table) {
			$table->increments('id');
            $table->integer('candidat_id')->unsigned();
            $table->foreign('candidat_id')->references('id')->on('candidats');
        
           
            $table->string('Liste_candidats');
			$table->date('Date_Examen');
			$table->string('Type_Examen');
            $table->time('Horaire');
		});
	}

	public function down()
	{
		Schema::drop('Examens');
	}
}