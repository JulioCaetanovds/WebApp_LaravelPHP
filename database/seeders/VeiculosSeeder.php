<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veiculo;
use App\Models\Cliente;
use Faker\Factory as Faker;

class VeiculosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $modelos = ['Fiat Uno', 'Volkswagen Gol', 'Chevrolet Onix', 'Hyundai HB20', 'Ford Ka', 'Renault Kwid', 'Toyota Corolla', 'Honda Civic', 'Jeep Renegade', 'Nissan Kicks'];

        // Obter todos os IDs dos clientes
        $cliente_ids = Cliente::pluck('cliente_id')->toArray();

        for ($i = 0; $i < 100; $i++) {
            Veiculo::create([
                'placa' => strtoupper($faker->bothify('???-####')),
                'cor' => $faker->safeColorName,
                'modelo' => $faker->randomElement($modelos),
                'cliente_id' => $faker->randomElement($cliente_ids),
            ]);
        }
    }
}
