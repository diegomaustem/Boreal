<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusSala extends Model
{
    use HasFactory;

    protected $table = 'status_salas';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = ['nome'];

    protected $casts = [
        'criado_em' => 'datetime',
        'atualizado_em' => 'datetime',
    ];

    public function salas(): HasMany
    {
        return $this->hasMany(Sala::class, 'status_id');
    }
}
