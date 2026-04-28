@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
        <div class="pagetitle">
        <h1>Oficiales</h1>
        
        </div><!-- End Page Title -->

        {{-- Inicio de tabla "oficiales" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Consulta de Oficiales</h5>

                    <!-- Table with stripped rows -->
                    <a href="{{ route('oficiales.create') }}" class="btn" style="background-color: #032263; color: white;">
                        <i class=" ri-add-fill"></i> Registrar Oficial
                    </a>
                    <hr>
                    <table class="table table-bordered datatable">
                        <thead>
                        <tr>
                            <th style="background-color: #032263; color: white;">Nombres</th>
                            <th style="background-color: #032263; color: white;">Apellidos</th>
                            <th style="background-color: #032263; color: white;">Estatus</th>
                            <th style="background-color: #032263; color: white;">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->nombres }}</td>
                                    <td>{{ $item->apellidos }}</td>
                                    @if ($item->estatus === 'activo')
                                        <td class="text-center"><span class="badge bg-success">{{ ucfirst($item->estatus) }}</span></td>
                                    @else
                                        <td class="text-center"><span class="badge bg-danger">{{ ucfirst($item->estatus) }}</span></td>
                                    @endif
                                    <!-- <td>{{ $item->created_at->format('d/m/Y H:i') }}</td> -->
                                    <td class="text-center">
                                        <div class="" role="group">
                                            <a href="{{ route('oficiales.edit', $item->id) }}" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                                                <i class=" ri-edit-2-fill"></i>
                                            </a>
                                            <form action="{{ route('oficiales.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar" onclick="return confirm('¿Estás seguro de eliminar este oficial?')">
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