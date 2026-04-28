<?php

namespace App\Http\Controllers;

use App\Models\Infraccion;
use App\Models\Oficial;
use App\Models\TipoInfraccion;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = 'Dashboard';
        // $totalInfracciones = Infraccion::count();
        // $totalOficiales = Oficial::count();
        // $totalTipos = TipoInfraccion::count();

        // Datos para gráfica de líneas (histórico semanal)
        $historicoSemanal = [
            'labels' => ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            'data' => [12, 19, 15, 25, 22, 30, 28] // Datos de ejemplo
        ];

        // Datos para gráfica de barras (reincidentes)
        $reincidentes = [
            'labels' => ['1 infracción', '2 infracciones', '3+ infracciones'],
            'data' => [45, 23, 8] // Datos de ejemplo
        ];

        return view('modules.dashboard.home', compact(
            'titulo', 
            // 'totalInfracciones', 
            // 'totalOficiales', 
            // 'totalTipos',
            'historicoSemanal',
            'reincidentes'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
