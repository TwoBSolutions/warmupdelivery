<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'id' => 1,
            'nome' => 'ROOT',
            'email' => 'ROOT',
            'tipo' =>'ROOT',
            'password' => bcrypt('warm#2016@root'),
        ]);
 		DB::table('users')->insert([
            'id' => 2,
            'nome' => 'TESTE',
            'email' => 'TESTE',
            'tipo' =>'ADM',
            'password' => bcrypt('teste'),
        ]);

       echo 'Users Ok';



    }
}
