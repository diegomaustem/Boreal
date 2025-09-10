<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    public function run(): void
    {
        Sala::factory()->count(7)->create();
        $this->command->info('✅ Salas criadas com sucesso!');
    }
}
