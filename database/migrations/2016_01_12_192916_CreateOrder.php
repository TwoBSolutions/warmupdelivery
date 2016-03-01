<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pessoa');
            $table->string('observacao');
            $table->string('tipo');
            $table->string('local');
            $table->string('rua');
            $table->integer('numero');
            $table->integer('complemento');
            $table->integer('bairro');
            $table->integer('endereco_observacao');
            $table->float('subtotal');
            $table->float('desconto');
            $table->float('total');
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
       Schema::drop('order');
    }
}
