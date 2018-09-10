<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Auth;
class CreateUsersTable extends Migration
{
    public $timestamps = false;

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('date_naissance');
            $table->string('telephone');
            $table->string('role');

            $table->string('password');
            $table->rememberToken();
            $table->boolean('admin')->default(0);

        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
