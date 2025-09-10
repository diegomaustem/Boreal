<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sala extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $incrementing = false;
   
    protected $fillable = [
        'nome',
        'descricao',
        'capacidade_max',
        'status_id'
    ];

    protected $casts = [
        'criado_em' => 'datetime',
        'atualizado_em' => 'datetime',
    ];

    public function agendamentos(): HasMany
    {
        return $this->hasMany(Agendamento::class);
    }

    public function status(): BelongsTo
    {
        return $this->BelongsTo(StatusSala::class, 'status_id');
    }
}
