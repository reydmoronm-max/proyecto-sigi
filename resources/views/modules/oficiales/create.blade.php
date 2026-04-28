@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="pagetitle">
        <h1>Registrar nuevo Oficial</h1>
        </div><!-- Final page title -->

        {{-- Inicio de formulario "oficiales" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('oficiales.store') }}" autocomplete="off" method="POST">
                            @csrf
                        
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required>
                                        <label for="nombres">Nombres</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                                        <label for="apellidos">Apellidos</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="estatus" id="estatus" required>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                        <label for="estatus">Estatus</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn" style="background-color: #4154f1; color: white;">Registrar Oficial</button>
                                    <a href="{{ route('oficiales.index') }}" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
</main>

@endsection