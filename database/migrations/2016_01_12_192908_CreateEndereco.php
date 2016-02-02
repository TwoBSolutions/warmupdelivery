<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('responsavel');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('referencia');
            $table->integer('id_pessoa');
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
       Schema::drop('endereco');
    }
}
