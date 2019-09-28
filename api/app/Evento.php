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
        'evento_horario_inicio',
        'evento_horario_final',
        'inscricao_data_inicio',
        'inscricao_data_final',
        'inscricao_horarario_inicio',
        'inscricao_horarario_final',
    ];
    public $timestamps = false;
}
