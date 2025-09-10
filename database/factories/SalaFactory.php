<?php

namespace Database\Factories;

use App\Models\StatusSala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sala>
 */
class SalaFactory extends Factory
{
    public function definition(): array
    {
        $statusIds = StatusSala::pluck('id')->toArray();

        return [
            'id' => Str::uuid(),
            'nome' => $this->faker->randomElement([
                'Sala de Reuniões',
                'Auditório', 
                'Sala de Treinamento',
                'Laboratório de Informática',
                'Sala de Vídeo',
                'Sala Criativa',
                'Espaço de Inovação'
            ]),
            'descricao' => $this->faker->sentence(),
            'capacidade_max' => $this->faker->numberBetween(5, 30),
            'status_id' => $this->faker->randomElement($statusIds), 
            'criado_em' => now(),
            'atualizado_em' => now(),
        ];
    }

}
