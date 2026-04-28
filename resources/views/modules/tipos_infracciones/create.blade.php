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
        <h1>Registrar nuevo tipo de infracción</h1>
        </div><!-- Final page title -->

        {{-- Inicio de formulario "tipos_infracciones" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('tipos_infracciones.store') }}" autocomplete="off" method="POST">
                            @csrf

                            <div class="row g-3 mt-2">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del tipo de infracción" required>
                                        <label for="nombre">Nombre del tipo de infracción</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn" style="background-color: #032263; color: white;">Registrar Tipo de Infracción</button>
                                    <a href="{{ route('tipos_infracciones.index') }}" class="btn btn-secondary">Cancelar</a>
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