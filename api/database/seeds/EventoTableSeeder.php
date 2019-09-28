<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventoTableSeeder extends Seeder {
    public function run() {
        // comentário
        for ($i = 0; $i < 50; $i++){
            DB::table('eventos')->insert([
                'titulo' => Str::random(20),
                'descricao' => Str::random(1500),
                'evento_data_inicio' => Carbon::now()->toDate(),
                'evento_data_final' => Carbon::now()->toDate(),
                'evento_horario_inicio' => Carbon::now()->toTimeString(),
                'evento_horario_final' => Carbon::now()->toTimeString(),
                'inscricao_data_inicio' => Carbon::now()->toDate(),
                'inscricao_data_final' => Carbon::now()->toDate(),
                'inscricao_horario_inicio' => Carbon::now()->toTimeString(),
                'inscricao_horario_final' => Carbon::now()->toTimeString(),
                'usuario_id' => rand(1,10),
                'endereco_id' => rand(1,50),
            ]);
        }
    }
}
