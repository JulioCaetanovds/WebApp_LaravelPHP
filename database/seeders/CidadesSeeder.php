<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;
use Faker\Factory as Faker;

class CidadesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $cidades = [
            'São Paulo', 'Rio de Janeiro', 'Belo Horizonte', 'Porto Alegre', 'Curitiba',
            'Brasília', 'Salvador', 'Fortaleza', 'Recife', 'Florianópolis'
        ];

        foreach ($cidades as $cidade) {
            Cidade::create([
                'nome' => $cidade,
                'uf' => $faker->stateAbbr
            ]);
        }
    }
}
