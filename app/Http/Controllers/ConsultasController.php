<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultasController extends Controller

{
    public function index()
    {
        $titulo = 'Módulo de Consultas';
        return view('modules.consultas.index', compact('titulo'));
    }

    public function buscar(Request $request)
{
    $valor = $request->input('buscar');
    $titulo = "Resultados para: " . $valor;

    // SIMULACIÓN DE DATOS (Fake Data)
    // Creamos una colección de objetos manuales para que la vista tenga qué mostrar
    $resultados = collect([
        (object)[
            'id' => 1,
            'cedula' => '20123456',
            'nombres' => 'Juan Alberto',
            'apellidos' => 'Pérez García',
            'placa_vehiculo' => 'AB123CD',
            'estado' => 'Pendiente',
            'created_at' => now()
        ],
        (object)[
            'id' => 2,
            'cedula' => '20123456',
            'nombres' => 'Juan Alberto',
            'apellidos' => 'Pérez García',
            'placa_vehiculo' => 'XYZ-999',
            'estado' => 'Pagada',
            'created_at' => now()->subDays(10)
        ]
    ]);

    
    // Simulamos que solo existe la cédula 20123456 y la placa AB123CD
    if ($valor == '20123456' || strtoupper($valor) == 'AB123CD') {
        $resultados = collect([
            (object)[
                'id' => 1,
                'cedula' => '20123456',
                'nombres' => 'Juan Alberto',
                'apellidos' => 'Pérez García',
                'placa_vehiculo' => 'AB123CD',
                'estado' => 'Pendiente',
                'created_at' => now()
            ]
        ]);
        return view('modules.consultas.index', compact('resultados', 'titulo', 'valor'));
    } else {
        // Si no coincide, regresamos con un mensaje de error técnico
        return redirect()->route('consultas.index')
            ->with('error', 'El parámetro "' . $valor . '" no coincide con ningún registro en la base de datos de ciudadanos o vehículos.');
    }
}

public function perfilPrueba()
{
    $titulo = "Perfil del Ciudadano";
    return view('modules.consultas.perfil_ciudadano', compact('titulo'));
}
}