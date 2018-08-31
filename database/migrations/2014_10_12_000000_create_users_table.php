<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('first_surname');
            $table->string('second_surname');
            $table->string('rut')->unique();
            $table->string('cellphone');
            $table->string('email')->unique();
            $table->string('num_worker');
            $table->string('depto');
            $table->string('occupation');
            $table->string('password');
            $table->string('changepass');
            $table->string('rol');
            $table->string('authorization_method');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
