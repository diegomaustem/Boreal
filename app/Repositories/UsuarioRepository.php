<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\Contracts\UsuarioRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class UsuarioRepository implements UsuarioRepositoryInterface
{
    public function listarPorId(string $id): ?Usuario
    {
        try {
            return Usuario::find($id);
        }catch(\Exception $e) {
            Log::error('[Repository] - Erro ao buscar usuário no banco de dados.' . $e->getMessage(), [
                'exception' => $e->getMessage(),
                'id' => $id
            ]);
            throw new \Exception("Erro ao buscar usuário no banco de dados", 500);
        }
    }

    public function listar(): Collection
    {
        try {
            return Usuario::all();
        }catch(\Exception $e) {
            Log::error('[Repository] - Erro ao buscar usuários no banco de dados.' . $e->getMessage(), [
                'exception' => $e->getMessage()
            ]);
            throw new \Exception("Erro ao buscar usuários no banco de dados.", 500);
        }
    }

    public function criar(array $dados): Usuario
    {
        try { 
            return Usuario::create($dados);
        }catch(\Exception $e) {
            Log::error('[Repository] - Erro ao inserir usuário no banco de dados.' . $e->getMessage(), [
                'exception' => $e->getMessage(),
                'usuario' => $dados
            ]);
        }   throw new \Exception("Erro ao inserir usuário no banco de dados.", 500);
    }   
}