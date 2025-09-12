<?php

namespace App\Providers;

use App\Repositories\Contracts\UsuarioRepositoryInterface;
use App\Repositories\UsuarioRepository;
use App\Services\Auth\AuthServiceInterface;
use App\Services\Auth\JwtAuthService;
use App\Services\Usuario\UsuarioService;
use App\Services\Usuario\UsuarioServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UsuarioRepositoryInterface::class, UsuarioRepository::class);
        $this->app->bind(AuthServiceInterface::class, JwtAuthService::class);
        $this->app->bind(UsuarioServiceInterface::class, UsuarioService::class);
    }

    public function boot(): void
    {
        //
    }
}
