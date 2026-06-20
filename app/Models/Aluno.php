<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    // Campos liberados para atribuicao em massa no cadastro
    protected $guarded = [];

    public $timestamps = false;
}
