<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->bigIncrements('id_paquete');
            $table->foreignId('id_destino')->constrained('destinos', 'id_destino')->cascadeOnDelete();
            $table->string('nombre', 100);
            $table->integer('dias');
            $table->decimal('precio', 10, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paquetes');
    }
};
