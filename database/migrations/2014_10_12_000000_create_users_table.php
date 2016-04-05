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
            $table->datetime('data_nasc');
            $table->string('tipo');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('remember_token');
            $table->string('facebookid');
            $table->string('foto');
            $table->string('fone');
            $table->string('fone2');
            $table->string('create_from')->default('APP');
            $table->integer('status')->default(1);
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
