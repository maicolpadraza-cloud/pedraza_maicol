<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Paquete;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaqueteController extends Controller
{
    public function index(): View
    {
        $paquetes = Paquete::with('destino')->orderBy('nombre')->get();

        return view('paquetes.index', compact('paquetes'));
    }

    public function create(): View
    {
        $destinos = Destino::orderBy('nombre')->get();

        return view('paquetes.create', compact('destinos'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'id_destino' => ['required', 'integer', 'exists:destinos,id_destino'],
            'nombre' => ['required', 'string', 'max:100'],
            'dias' => ['required', 'integer', 'min:1'],
            'precio' => ['required', 'numeric', 'min:0', 'max:99999999.99', 'decimal:0,2'],
        ]);

        Paquete::create($validated);

        return redirect()->route('paquetes.index')->with('success', 'Paquete creado correctamente.');
    }

    public function edit(Paquete $paquete): View
    {
        $destinos = Destino::orderBy('nombre')->get();

        return view('paquetes.edit', compact('paquete', 'destinos'));
    }

    public function update(Request $request, Paquete $paquete): RedirectResponse
    {
        $validated = $request->validate([
            'id_destino' => ['required', 'integer', 'exists:destinos,id_destino'],
            'nombre' => ['required', 'string', 'max:100'],
            'dias' => ['required', 'integer', 'min:1'],
            'precio' => ['required', 'numeric', 'min:0', 'max:99999999.99', 'decimal:0,2'],
        ]);

        $paquete->update($validated);

        return redirect()->route('paquetes.index')->with('success', 'Paquete actualizado correctamente.');
    }

    public function destroy(Paquete $paquete): RedirectResponse
    {
        $paquete->delete();

        return redirect()->route('paquetes.index')->with('success', 'Paquete eliminado correctamente.');
    }
}
