<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'endereco', 'telefone', 'cidade_id',
    ];

    protected $primaryKey = 'cliente_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'cliente_id');
    }

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class, 'cliente_id');
    }
}
