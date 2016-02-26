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
            $table->string('bairro');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('observacao');
            $table->string('referencia');
            $table->string('cidade');
            $table->integer('id_pessoa');
            $table->integer('status');
            $table->integer('principal');
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
