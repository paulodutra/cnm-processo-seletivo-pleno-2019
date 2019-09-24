<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Evento extends Model {
    protected $table = 'eventos';
    protected $fillable = [
        'titulo',
        'descricao',
        'evento_data_inicio',
        'evento_data_final',
        'evento_hora_inicio',
        'evento_hora_final',
        'inscricao_data_inicio',
        'inscricao_data_final',
        'inscricao_hora_inicio',
        'inscricao_hora_final',
    ];
    public $timestamps = false;
}
