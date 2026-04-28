@extends('layouts.login')
@section('titulo', $titulo)

@section('contenido')
    <main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    {{-- <span class="d-none d-lg-block">Sistema de Información para la Gestión de Infracciones</span> --}}
                    </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                    <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Bienvenido</h5>
                        <p class="text-center small">Ingrese su usuario y contraseña</p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('logear') }}">
                        @csrf
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Usuario</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="text" name="user" class="form-control" id="user" required>
                                <div class="invalid-feedback">Por favor, ingrese su usuario</div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                            <div class="invalid-feedback">Por favor, ingrese su contraseña</div>
                        </div>

                        <div class="col-12">
                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div> --}}
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Iniciar sesión</button>
                        </div>
                    </form>
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    </div>
                </div>

                </div>
            </div>
            </div>

        </section>

        </div>
    </main>
@endsection