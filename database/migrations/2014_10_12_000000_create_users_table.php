<?php

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
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('cpf');
            $table->string('rg');
            $table->date('data_nasc');
            $table->integer('tipo');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('remember_token');
            $table->string('facebookid');
            $table->string('foto');
            $table->string('fone');
            $table->string('fone2');
            $table->integer('status');
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
        Schema::drop('users');
    }
}
