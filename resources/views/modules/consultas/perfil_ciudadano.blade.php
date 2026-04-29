@extends('layouts.main')

@section('titulo', 'Perfil del Ciudadano')

@section('contenido')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Expediente del Ciudadano</h1>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <i class="ri-user-line" style="font-size: 60px; color: #032263;"></i>
                        <h2>Juan Alberto Pérez</h2>
                        <h3>V-20.123.456</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#placas">Vehículos Asociados</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#historial">Historial de Infracciones</button>
                            </li>
                        </ul>

                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active" id="placas">
                                <h5 class="card-title">Placas vinculadas</h5>
                                <ul class="list-group">
                                   
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        XYZ-999 (Chevrolet Aveo)
                                        <a href="#" class="btn"; class="ri-search-2-line" style="background-color: #032263; color: white;">Ver Vehículo</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-pane fade" id="historial">
                                <h5 class="card-title">Faltas cometidas</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Infracción</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>12/04/2026</td>
                                            <td>Exceso de velocidad</td>
                                            <td><span class="badge bg-danger">Pendiente</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection