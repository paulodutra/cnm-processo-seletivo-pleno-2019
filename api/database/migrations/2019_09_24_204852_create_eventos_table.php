<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration {
    // comentário
    public function up() {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('titulo',150)->nullable(false);
            $table->longText('descricao')->nullable(false);
            $table->date('evento_data_inicio')->nullable(false);
            $table->date('evento_data_conclusao')->nullable(false);
            $table->date('evento_horario_inicio')->nullable(false);
            $table->date('evento_horario_final')->nullable(false);
            $table->date('inscricao_data_inicio')->nullable(false);
            $table->date('inscricao_data_conclusao')->nullable(false);
            $table->date('inscricao_horario_inicio')->nullable(false);
            $table->date('inscricao_horario_final')->nullable(false);
            $table->integer('usuario_id')->unsigned()->nullable(false);
            $table->integer('endereco_id')->unsigned()->nullable(false);
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    // comentário
    public function down() {
        Schema::dropIfExists('eventos');
    }
}
