<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('configuracoes')->insert([
            'id' => 1,
            'email' => 'contato@warmup.com.br',
            'titulo_site' => 'Warm Up Delivery',
            'hora_abre' => '22:00:00',
            'hora_fecha' => '04:00:00',
            'rua' => 'Rua ministro alfredo valadao',
            'numero' => '35 b',
            'bairro' => 'Copa Cabana',
            'cidade' => 'Rio de Janeiro',
            'telefone' => '(21) 3208 8980',
            'status' => 1
                    ]);

       echo 'Configurações Ok';
    }
}
