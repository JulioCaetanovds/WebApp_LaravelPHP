<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $primaryKey = 'agendamento_id';
    protected $fillable = [
        'preco', 'data_agendamento', 'hora_agendamento', 'tipo_servico_id', 'funcionario_id', 'descricao', 'cliente_id', 'veiculo_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo_id');
    }

    public function tipoServico()
    {
        return $this->belongsTo(TipoServico::class, 'tipo_servico_id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }
}
