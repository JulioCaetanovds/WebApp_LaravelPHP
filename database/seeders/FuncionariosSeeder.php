<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Funcionario;
use Faker\Factory as Faker;

class FuncionariosSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('pt_BR');

        $funcoes = ['Lavador', 'Gerente', 'Atendente', 'Supervisor'];

        for ($i = 0; $i < 20; $i++) {
            Funcionario::create([
                'nome' => $faker->name,
                'funcao' => $faker->randomElement($funcoes),
            ]);
        }
    }
}
