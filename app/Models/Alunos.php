<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = ['nome', 'data_nascimento'];

    public function livrosModel(){
        return $this->hasMany(Livros::class, 'id_aluno');
    }
}
