<?php

namespace Database\Seeders;

use App\Models\Destino;
use Illuminate\Database\Seeder;

class AgenciaViajesSeeder extends Seeder
{
    public function run(): void
    {
        $paris = Destino::create([
            'nombre' => 'París',
            'pais' => 'Francia',
            'clima' => 'Templado',
        ]);
        $cancun = Destino::create([
            'nombre' => 'Cancún',
            'pais' => 'México',
            'clima' => 'Tropical',
        ]);
        $cusco = Destino::create([
            'nombre' => 'Cusco',
            'pais' => 'Perú',
            'clima' => 'Frío',
        ]);

        $paris->paquetes()->createMany([
            ['nombre' => 'París clásico', 'dias' => 5, 'precio' => 1299.00],
            ['nombre' => 'París y Versalles', 'dias' => 7, 'precio' => 1699.00],
        ]);
        $cancun->paquetes()->createMany([
            ['nombre' => 'Playa Cancún', 'dias' => 4, 'precio' => 899.00],
            ['nombre' => 'Cancún todo incluido', 'dias' => 7, 'precio' => 1499.00],
        ]);
        $cusco->paquetes()->create([
            'nombre' => 'Cusco y Machu Picchu',
            'dias' => 6,
            'precio' => 1199.00,
        ]);
    }
}
