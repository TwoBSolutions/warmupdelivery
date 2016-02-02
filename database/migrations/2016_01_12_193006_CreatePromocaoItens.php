<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocaoItens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocao_itens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('desconto');
            $table->string('tipo');
            $table->integer('status');
            $table->integer('id_preco');
            $table->date('data_inicio');
            $table->date('data_fim');
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
        Schema::drop('promocao_itens');
    }
}
