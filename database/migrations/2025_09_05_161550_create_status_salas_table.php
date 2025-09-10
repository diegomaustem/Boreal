<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('status_salas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome', 50)->unique();
            $table->timestamp("criado_em");
            $table->timestamp("atualizado_em");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_salas');
    }
};
