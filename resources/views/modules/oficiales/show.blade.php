@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')

<main id="main" class="main">
        <div class="pagetitle">
        <h1>Consultar Oficial</h1>
        </div><!-- Final page title -->

        {{-- Mostrar datos del oficial --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalles del oficial</h5>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ $item->nombres }}" readonly>
                                    <label>Nombres</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ $item->apellidos }}" readonly>
                                    <label>Apellidos</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ ucfirst($item->estatus) }}" readonly>
                                    <label>Estatus</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ $item->created_at->format('d/m/Y H:i') }}" readonly>
                                    <label>Fecha de registro</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <a href="{{ route('oficiales.index') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
</main>

@endsection