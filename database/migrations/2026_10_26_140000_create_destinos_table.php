<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->bigIncrements('id_destino');
            $table->string('nombre', 100);
            $table->string('pais', 100);
            $table->string('clima', 50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
