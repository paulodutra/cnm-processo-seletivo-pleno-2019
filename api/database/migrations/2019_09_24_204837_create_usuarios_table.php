<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration {
    // comentário
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('nome',250)->nullable(false);
            $table->string('email',150)->nullable(false);
            $table->string('documento',11)->nullable(false);
            $table->string('contato',11)->nullable(false);
        });
    }

    // comentário
    public function down() {
        Schema::dropIfExists('usuarios');
    }
}
