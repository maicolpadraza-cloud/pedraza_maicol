<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinoController extends Controller
{
    public function index(): View
    {
        $destinos = Destino::orderBy('nombre')->get();

        return view('destinos.index', compact('destinos'));
    }

    public function create(): View
    {
        return view('destinos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'pais' => ['required', 'string', 'max:100'],
            'clima' => ['required', 'string', 'max:50'],
        ]);

        Destino::create($validated);

        return redirect()->route('destinos.index')->with('success', 'Destino creado correctamente.');
    }

    public function edit(Destino $destino): View
    {
        return view('destinos.edit', compact('destino'));
    }

    public function update(Request $request, Destino $destino): RedirectResponse
    {
        $validated = $request->validate([
            'nombre' => ['required', 'string', 'max:100'],
            'pais' => ['required', 'string', 'max:100'],
            'clima' => ['required', 'string', 'max:50'],
        ]);

        $destino->update($validated);

        return redirect()->route('destinos.index')->with('success', 'Destino actualizado correctamente.');
    }

    public function destroy(Destino $destino): RedirectResponse
    {
        $destino->delete();

        return redirect()->route('destinos.index')->with('success', 'Destino eliminado correctamente.');
    }
}
