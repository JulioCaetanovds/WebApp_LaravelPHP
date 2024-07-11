<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoServico;

class TipoServicosSeeder extends Seeder
{
    public function run()
    {
        $tipos_servicos = [
            ['descricao' => 'Lavagem Simples'],
            ['descricao' => 'Lavagem Completa'],
            ['descricao' => 'Enceramento'],
            ['descricao' => 'Polimento'],
            ['descricao' => 'Lavagem de Motor'],
            ['descricao' => 'Higienização Interna'],
        ];

        foreach ($tipos_servicos as $tipo_servico) {
            TipoServico::create($tipo_servico);
        }
    }
}
