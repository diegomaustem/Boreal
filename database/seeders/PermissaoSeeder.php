<?php

namespace Database\Seeders;

use App\Models\Permissao;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissaoSeeder extends Seeder
{
    public function run(): void
    {
        $permissoes = [
            [
                'id' => Str::uuid(),
                'nome' => 'Administrador',
                'criado_em' => now(),
                'atualizado_em' => now()
            ],
            [
                'id' => Str::uuid(),
                'nome' => 'Gerenciador',
                'criado_em' => now(),
                'atualizado_em' => now()
            ],
            [
                'id' => Str::uuid(),
                'nome' => 'Usuario',
                'criado_em' => now(),
                'atualizado_em' => now()
            ]
        ];

        Permissao::insert($permissoes);
        $this->command->info('✅ Permissões criadas com sucesso!');
    }
}
