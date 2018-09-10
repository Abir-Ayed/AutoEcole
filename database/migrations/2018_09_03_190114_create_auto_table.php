<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoTable extends Migration
{
       public $timestamps = false;

    public function up()
    {
        Schema::create('auto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidat_id')->unsigned();
            $table->foreign('candidat_id')->references('id')->on('candidats');
        
            $table->string('nom');
            $table->string('adresse');
            $table->string('code_postale');
            $table->string('Num_tel');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto');
    }
}
