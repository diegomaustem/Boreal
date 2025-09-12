<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Usuario\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::post('/registrar', RegisterController::class);

Route::get('usuarios', [UsuarioController::class, 'listarUsuarios']);
Route::get('usuario/{id}', [UsuarioController::class, 'listarUsuario']);
Route::patch('usuario/{id}', [UsuarioController::class, 'atualizar']);
Route::delete('usuario/{id}', [UsuarioController::class, 'deletar']);
