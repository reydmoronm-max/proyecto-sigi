<?php

namespace App\Http\Controllers;

use App\Models\TipoInfraccion;
use Exception;
use Illuminate\Http\Request;

class TiposInfracciones extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TipoInfraccion::all();
        $titulo = 'Tipos de Infracciones';
        return view('modules.tipos_infracciones.index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo = 'Registrar Tipo de Infracción';
        return view('modules.tipos_infracciones.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tipos_infracciones,nombre'
        ], [
            'nombre.unique' => 'Este tipo de infracción ya está registrado.'
        ]);

        TipoInfraccion::create($request->all());
        
        return to_route('tipos_infracciones.index')->with('success', 'Tipo de infracción registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo = 'Consultar Tipo de Infracción';
        $item = TipoInfraccion::findOrFail($id);
        return view('modules.tipos_infracciones.show', compact('titulo', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $titulo = 'Editar Tipo de Infracción';
        $item = TipoInfraccion::findOrFail($id);
        return view('modules.tipos_infracciones.edit', compact('titulo', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:tipos_infracciones,nombre,' . $id
        ], [
            'nombre.unique' => 'Este tipo de infracción ya está registrado.'
        ]);

        $item = TipoInfraccion::findOrFail($id);
        $item->update($request->all());
        
        return to_route('tipos_infracciones.index')->with('update', 'Tipo de infracción actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = TipoInfraccion::findOrFail($id);
        $item->delete();
        
        return to_route('tipos_infracciones.index')->with('delete', 'Tipo de infracción eliminado exitosamente.');
    }
}
