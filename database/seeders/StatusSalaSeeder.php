<?php

namespace Database\Seeders;

use App\Models\StatusSala;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StatusSalaSeeder extends Seeder
{
    public function run(): void
    {
        $status = [
            [
                'id' => Str::uuid(),
                'nome' => 'Ocupada',
                'criado_em' => now(),
                'atualizado_em' => now()
            ],
            [
                'id' => Str::uuid(),
                'nome' => 'Livre',
                'criado_em' => now(),
                'atualizado_em' => now()
            ],
            [
                'id' => Str::uuid(),
                'nome' => 'Reservada',
                'criado_em' => now(),
                'atualizado_em' => now()
            ]
        ];

        StatusSala::insert($status);
        $this->command->info('✅ Status de salas criados com sucesso!');
    }
}
