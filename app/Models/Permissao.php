<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permissao extends Model
{
    use HasFactory;

    protected $table = 'permissoes';

    public $timestamps = false;

    public $incrementing = false;
   
    protected $fillable = [
        'nome'
    ];

    protected $casts = [
        'criado_em' => 'datetime',
        'atualizado_em' => 'datetime',
    ];

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class, 'permissao_id');
    }
}
