<?php

namespace App\Http\Controllers;

use App\Models\Oficial;
use Exception;
use Illuminate\Http\Request;

class Oficiales extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Oficial::all();
        $titulo = 'Oficiales';
        return view('modules.oficiales.index', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo = 'Registrar Oficial';
        return view('modules.oficiales.create', compact('titulo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'estatus' => 'required|in:activo,inactivo'
        ]);

        Oficial::create($request->all());
        
        return to_route('oficiales.index')->with('success', 'Oficial registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo = 'Consultar Oficial';
        $item = Oficial::findOrFail($id);
        return view('modules.oficiales.show', compact('titulo', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $titulo = 'Editar Oficial';
        $item = Oficial::findOrFail($id);
        return view('modules.oficiales.edit', compact('titulo', 'item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'estatus' => 'required|in:activo,inactivo'
        ]);

        $item = Oficial::findOrFail($id);
        $item->update($request->all());
        
        return to_route('oficiales.index')->with('update', 'Oficial actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Oficial::findOrFail($id);
        $item->delete();
        
        return to_route('oficiales.index')->with('delete', 'Oficial eliminado exitosamente.');
    }
}
