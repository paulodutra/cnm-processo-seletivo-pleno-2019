<?php

use Illuminate\Database\Seeder;

class EnderecoTableSeeder extends Seeder {
    public function run() {
        // comentário
        for ($i = 0; $i < 50; $i++){
            DB::table('enderecos')->insert([
                'endereco' => 'Setor Bancário Sul Quadra 01 Lotes 01,02 e 05 - Edifício Sede III',
                'cidade' => 'Brasília',
                'estado' => 'Distrito Federal',
            ]);
        }
    }
}
