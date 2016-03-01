<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->text('texto');
            $table->integer('status');
            $table->integer('id_preco');
            $table->integer('id_marca');
            $table->integer('estoque')->default(0);
            $table->integer('estoque_min')->default(1);
            $table->integer('id_categoria');
            $table->string('tags');
            $table->string('picture');
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
        Schema::drop('produtos');
    }
}
