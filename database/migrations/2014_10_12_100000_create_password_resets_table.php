<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Auth;
class CreatePasswordResetsTable extends Migration
{
   

    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email');
            $table->string('token');
$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
