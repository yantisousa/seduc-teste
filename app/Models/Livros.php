<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = ['id_aluno', 'titulo', 'ano'];

    public function alunosModel(){
        return $this->belongsTo(Alunos::class);
    }
}
