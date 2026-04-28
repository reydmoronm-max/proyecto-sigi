@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
        <div class="pagetitle">
        <h1>Tipos de Infracciones</h1>

        </div><!-- End Page Title -->

        {{-- Inicio de tabla "tipos_infracciones" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Consulta de tipos de infracciones</h5>

                    <!-- Table with stripped rows -->
                    <a href="{{ route('tipos_infracciones.create') }}" class="btn" style="background-color: #032263; color: white;">
                        <i class=" ri-add-fill"></i> Registrar Tipo de Infracción
                    </a>
                    <hr>
                    <table class="table table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <!-- <td>{{ $item->created_at->format('d/m/Y H:i') }}</td> -->
                                    <td class="text-center">
                                        <div class="" role="group">
                                            <a href="{{ route('tipos_infracciones.edit', $item->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                                <i class=" ri-edit-2-fill"></i>
                                            </a>
                                            <form action="{{ route('tipos_infracciones.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este tipo de infracción?')">
                                                    <i class="ri-delete-bin-5-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    </div>
                </div>

                </div>
            </div>
        </section>
</main>

@endsection