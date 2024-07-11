<?php
// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CidadesSeeder::class,
            ClientesSeeder::class,
            FuncionariosSeeder::class,
            TipoServicosSeeder::class,
            VeiculosSeeder::class,
        ]);
    }
}
