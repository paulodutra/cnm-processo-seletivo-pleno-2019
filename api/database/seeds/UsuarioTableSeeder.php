<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsuarioTableSeeder extends Seeder {
    public function run() {
        // comentário
        DB::table('usuarios')->insert([
            'nome' => 'Pedro Henrique',
            'email' => 'phmiranda@email.com.br',
            'documento' => '00011122299',
            'contato' => '61999993333',
        ]);

        // comentário
        for($i = 0; $i < 9; $i++){
            DB::table('usuarios')->insert([
                'nome' => Str::random(15),
                'email' => Str::random(15).'@email.com.br',
                'documento' => '00011122299',
                'contato' => '61999993333',
            ]);
        }
    }
}
