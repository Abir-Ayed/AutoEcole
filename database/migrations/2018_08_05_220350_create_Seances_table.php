<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeancesTable extends Migration {
    public $timestamps = false;
	public function up()
	{
		Schema::create('Seances', function(Blueprint $table) {
		 $table->increments('id');
		 $table->integer('formateur_id')->unsigned();
         $table->foreign('formateur_id')->references('id')->on('formateurs');
          $table->integer('moniteur_id')->unsigned();
         $table->boolean('typeboolean');	
		 $table->string('Liste_Formateurs');
		 $table->string('Liste_moniteurs');

		 $table->string('Type_Cours');
         $table->date('Date_Cours');
         $table->time('Horaire');
         $table->time('Duree');
         $table->integer('Montant');
			});
	}

	public function down()
	{
		Schema::drop('Seances');
	}
}
