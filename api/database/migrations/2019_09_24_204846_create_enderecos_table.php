<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration {
    // comentário
    public function up() {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable(false);
            $table->string('endereco',200)->nullable(false);
            $table->string('cidade',100)->nullable(false);
            $table->string('estado',30)->nullable(false);
        });
    }

    // comentário
    public function down() {
        Schema::dropIfExists('enderecos');
    }
}
