<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $primaryKey = 'veiculo_id';
    protected $fillable = ['placa', 'cor', 'modelo', 'cliente_id'];

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'veiculo_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
