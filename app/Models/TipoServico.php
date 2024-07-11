<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServico extends Model
{
    use HasFactory;

    // Definindo a tabela associada ao modelo
    protected $table = 'tipo_servicos';

    // Definindo os campos que podem ser atribuídos em massa
    protected $fillable = ['descricao'];

    // Relação com Agendamento
    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'tipo_servico_id');
    }
}
