<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    use HasFactory;
    protected $table = 'turmas';
    protected $guarded = [];

    public function alunosRelacionamentoTurmas(){
        return $this->hasMany(Alunos::class, 'id_turma');
    }
    public function professoresRelacionamentoTurmas(){
        return $this->hasMany(Professores::class, 'id_turma');
    }
}
