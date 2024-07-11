<?php

// database/seeders/AgendamentosTableSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendamentosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('agendamentos')->insert([
            // Adicione os dados de exemplo aqui
        ]);
    }
}
