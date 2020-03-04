<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    protected $primaryKey = 'id_turma';
    protected $table = "turmas";
    protected $fillable = [
        'matricula',
        'curso',
        'cod_unidade',
        'turma',
        'nome',
        'unidade',
    ];
}
