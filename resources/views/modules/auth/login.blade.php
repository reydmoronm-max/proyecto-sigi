@extends('layouts.login')
@section('titulo', $titulo)

@section('contenido')
    <main>
        {{-- Nuevo login --}}
            <section class="vh-100" id="grad">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col col-xl-10">
                            <div class="card fase-animada" style="border-radius: 1rem;">
                                <div class="row g-0">
                                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                                        <img src="{{ asset('recursos/assets/img/loginTransito.jpg') }}"
                                            alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                                    </div>
                                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">
                                            <form class="needs-validation" novalidate action="{{ route('logear') }}" method="POST">
                                                @csrf
                                                <div class="d-flex align-items-center mb-3 pb-1">
                                                    <img src="{{ asset('recursos/assets/img/logo.png') }}" class="me-3" style="width: 4rem; height: 4rem;">
                                                    <div class="row">
                                                        <span style="color: #032263;" class="h1 fw-bold mb-0">SIGI</span>
                                                        <span class="h8 text-muted">Sistema de Información para la Gestión de Infracciones</span>
                                                    </div>    
                                                </div>
                                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar sesión</h5>
                                                <div class="form-outline mb-4">
                                                    <input type="text" name="user" id="user" class="form-control form-control-lg" required/>
                                                    <label class="form-label mt-2" for="user">Usuario</label>
                                                </div>
                                                <div class="form-outline mb-4">
                                                    <input type="password" name="password" id="password" class="form-control form-control-lg" required/>
                                                    <label class="form-label mt-2" for="password">Contraseña</label>
                                                </div>
                                                <div class="pt-1 mb-4">
                                                    <button style="background-color: #032263; color: white; font-weight: bold;" class="btn btn-lg btn-block" type="submit">Acceder <i class="ri-login-box-line"></i></button>
                                                </div>
                                            </form>
                                            <div>
                                                @if ($errors->any())
                                                    <div style="color: rgb(158, 0, 0);">
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
                    </div>
                </div>
            </section>
        {{-- Final nuevo login --}}


    {{-- <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                            </a>
                        </div><!-- End Logo -->
                        <div class="card mb-3">
                                <img src="{{ asset('recursos/assets/img/loginTransito.jpg') }}" alt="..." class="card-img-top">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Bienvenido</h5>
                                        <p class="text-center small">Ingrese su usuario y contraseña</p>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('logear') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="user" class="form-label">Usuario</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="user" class="form-control" id="user" required>
                                                <div class="invalid-feedback">Por favor, ingrese su usuario</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input type="password" name="password" class="form-control" id="password" required>
                                            <div class="invalid-feedback">Por favor, ingrese su contraseña</div>
                                        </div>
                                        <div class="col-12">
                                            <button style="background-color: #032263; color: white;" class="btn w-100" type="submit">Iniciar sesión</button>
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
    </div> --}}
    </main>
@endsection