@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
        <div class="pagetitle">
        <h1>Infracciones</h1>
        
        </div><!-- End Page Title -->

        {{-- Inicio de tabla "infracciones" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Consulta de infracciones</h5>

                    <!-- Table with stripped rows -->
                    <a href="{{ route('infracciones.create') }}" class="btn" style="background-color: #032263; color: white;">
                        <i class=" ri-add-fill"></i> Registrar Infracción
                    </a>
                    <hr>
                    <table class="table table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Placa de Vehículo</th>
                            <th>Tipo de infracción</th>
                            <th>Fecha y hora</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>V-{{ $item->cedula }}</td>
                                    <td>{{ $item->nombres }}</td>
                                    <td>{{ $item->apellidos }}</td>
                                    <td>{{ $item->placa_vehiculo }}</td>
                                    <td>{{ $item->tipo_infraccion }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    {{-- @if ($item->estado === 'Retenido')
                                        <td class="text-center"><span class="badge bg-warning">{{ $item->estado }}</span></td>
                                    @elseif ($item->estado === 'Liberado')
                                        <td class="text-center"><span class="badge bg-success">{{ $item->estado }}</span></td>
                                    @else
                                        <td class="text-center"><span class="badge bg-danger">{{ $item->estado }}</span></td>
                                    @endif --}}
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('infracciones.show', $item->id) }}" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Consultar">
                                                <i class=" ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('infracciones.edit', $item->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                                <i class=" ri-edit-2-fill"></i>
                                            </a>
                                            <a style="pointer-events: none;" href="{{ route('infracciones.show', $item->id) }}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
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

@push('scripts')
    <script>
        @if (session('success')) 

            Swal.fire({
                title: '¡Éxito!',
                text: 'Se agregó la infracción correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
            
        @endif
        
        @if (session('update')) 

            Swal.fire({
                title: '¡Éxito!',
                text: 'Se actualizó la infracción correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
            
        @endif

        @if (session('delete')) 

            Swal.fire({
                title: '¡Éxito!',
                text: 'Se eliminó la infracción correctamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
            
        @endif
    </script>
@endpush