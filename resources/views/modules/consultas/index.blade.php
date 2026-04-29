@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Consultar Infractores y Vehículos</h1>
    </div>

    <section class="section">
        <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Buscador del Sistema</h5>
                        <p>Ingrese el número de cédula o la placa del vehículo para obtener el historial.</p>
                        
                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-excluir-octagon me-1"></i>
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        
                        <form action="{{ route('consultas.buscar') }}" method="GET" class="row g-2">
                            <div class="col-md-9">
                                <div class="form-floating">
                                    <input type="text" name="buscar" class="form-control" placeholder="Cédula o Placa" value="{{ $valor ?? '' }}" required>
                                    <label>Ingrese Cédula o Placa del Vehículo</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn" style="background-color: #032263; color: white;">
                                    <i class="ri-search-2-line"></i> Consultar
                                </button>
                            </div>
                        </form>

                            @if(isset($resultados) && $resultados->count() > 0)
                            <div class="row mt-4">
                                <div class="col-lg-10 mx-auto">
                                    <div class="card mt-3">
                                        <div class="card-header" style="background-color: #f0f4ff;">
                                            <h5 class="card-title mb-0" style="color: #032263;">Registro Encontrado</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted small mt-2">Se ha localizado la siguiente información:</p>
                                            
                                            <div class="table-responsive">
                                                <table class="table table-bordered align-middle">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th colspan="2" class="text-center">Información del Ciudadano / Vehículo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($resultados as $dato)
                                                        <tr>
                                                            <th style="width: 30%; background-color: #fafafa;">Cédula de Identidad</th>
                                                            <td>V-{{ $dato->cedula }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th style="background-color: #fafafa;">Nombre Completo</th>
                                                            <td>{{ $dato->nombres }} {{ $dato->apellidos }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th style="background-color: #fafafa;">Placa del Vehículo</th>
                                                            <td><span class="badge bg-dark">{{ $dato->placa_vehiculo }}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th style="background-color: #fafafa;">Estatus de Infracciones</th>
                                                            <td>
                                                                @if($dato->estado == 'Pendiente')
                                                                    <span class="badge bg-danger">Pendientes</span>
                                                                @else
                                                                    <span class="badge bg-success">Solvente</span>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th style="background-color: #fafafa;">Acción</th>
                                                            <td>
                                                                <a href="{{ route('consultas.perfil') }}" class="btn" style="background-color: #032263; color: white;">
                                                                    <i class="ri-file-user-line"></i> Ver Expediente Completo
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(isset($resultados) && $resultados->count() > 0)
    <div class="alert alert-info border-0 bg-light">
        <i class="ri-information-line"></i> Se han localizado <strong>{{ $resultados->count() }}</strong> coincidencia(s) en el historial del sistema.
    </div>
    @endif
</main>
@endsection