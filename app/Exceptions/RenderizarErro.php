<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class RenderizarErro extends Exception
{
    public function __construct(
        string $mensagem, 
        int $codigo
    ) {
        parent::__construct($mensagem, $codigo);
    }

    public function toResponse(): JsonResponse
    {
        return response()->json([
            'status' => "erro",
            'mensagem' => $this->getMessage(),
        ], $this->getCode());
    }
}