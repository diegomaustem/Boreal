<?php 

namespace App\Repositories\Contracts;

use App\Models\Usuario;
use Illuminate\Support\Collection;

interface UsuarioRepositoryInterface
{
    public function listarPorId(string $id): ?Usuario;
    public function listar(): Collection;
    public function criar(array $data): Usuario;
}