<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Cidade;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        // Obter todos os IDs das cidades
        $cidade_ids = Cidade::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            Cliente::create([
                'nome' => $faker->name,
                'endereco' => $faker->streetAddress,
                'telefone' => $faker->cellphoneNumber,
                'cidade_id' => $faker->randomElement($cidade_ids),
            ]);
        }
    }
}
