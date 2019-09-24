<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Endereco extends Model {
    protected $table = 'enderecos';
    protected $fillable = [
        'endereco',
        'cidade',
        'estado',
    ];
    public $timestamps = false;
}
