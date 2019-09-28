<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        Model::unguard();
        $this->call('UsuarioTableSeeder');
        $this->call('EnderecoleSeeder');
        $this->call('EventoTableSeeder');
        $this->command()->info('Seeder executadas com sucesso.');
        Model::reguard();
    }
}
