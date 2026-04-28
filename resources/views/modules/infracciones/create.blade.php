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
        <h1>Registrar nueva infracción</h1>
        </div><!-- Final page title -->

        {{-- Inicio de formulario "infracciones" --}}
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form id="formInfraccion" action="{{ route('infracciones.store') }}" autocomplete="off" method="POST">
                            @csrf
                        
                        {{-- Fase 1 del formulario --}}
                            <section class="row g-3" id="fase1">
                                <h4 style="margin-top: 2.5rem; color: #003772; font-weight: 600;">1. Datos del ciudadano</h4>
                                <hr>
                                <div class="col-md-12">
                                    <div class="input-group form-floating">
                                        <select name="nacionalidad" class="input-group-text" style="max-width:70px;">
                                            <option value="#">V</option>
                                            <option value="#">E</option>
                                            <option value="#">J</option>
                                        </select>
                                        <input type="number" class="form-control" name="cedula" id="cedula" placeholder="Cédula de identidad" required oninput="if(this.value.length>8)this.value=this.value.slice(0,8)">
                                        <label style="margin-left: 3.4rem" for="cedula">Cédula de identidad</label>
                                    </div>
                                </div>

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
                                        <input type="number" class="form-control" name="numero" id="numero" placeholder="Número de teléfono" required oninput="if(this.value.length>11)this.value=this.value.slice(0,11)">
                                        <label for="numero">Número de teléfono</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
                                        <label for="direccion">Dirección</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-6">
                                    <button type="button" class="btn" style="background-color: #032263; color: white;" onclick="mostrarFase(2)">Siguiente <i class=" ri-arrow-right-line"></i></button>
                                </div>
                            </section>

                        {{-- Fase 2 del formulario --}}

                            <section class="d-none row g-3" id="fase2">
                                <h4 style="margin-top: 2.5rem; color: #003772; font-weight: 600;">2. Datos del vehículo</h4>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="placa_vehiculo" id="placa_vehiculo" placeholder="Placa del vehículo" maxlength="9" required>
                                        <label for="placa_vehiculo">Placa del vehículo</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fabricante" id="fabricante" placeholder="Fabricante" required>
                                        <label for="fabricante">Fabricante</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required>
                                        <label for="modelo">Modelo</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="color" id="color" placeholder="Color" required>
                                        <label for="color">Color</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="ano" id="ano" placeholder="Año" required oninput="if(this.value.length>4)this.value=this.value.slice(0,4)">
                                        <label for="ano">Año</label>
                                    </div>
                                </div>

                                <hr>
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary" onclick="mostrarFase(1)">Atrás <i class="ri-arrow-go-back-line"></i></button>
                                    <button type="button" class="btn" style="background-color: #032263; color: white;" onclick="mostrarFase(3)">Siguiente <i class=" ri-arrow-right-line"></i></button>
                                </div>
                            </section>

                            {{-- Fase 3 del formulario --}}

                            <section class="d-none row g-3" id="fase3">
                                <h4 style="margin-top: 2.5rem; color: #003772; font-weight: 600;">3. Datos de la infracción</h4>
                                <hr>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="tipo_infraccion" id="tipo_infraccion" required>
                                        <option selected>Seleccione una opción</option>
                                        <option value="#">Infracción 1</option>
                                        <option value="#">Infracción 2</option>
                                        <option value="#">Infracción 3</option>
                                    </select>
                                        <label for="tipo_infraccion">Tipo de infracción</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="ubicacion" id="ubicacion" required>
                                        <option selected>Seleccione una opción</option>
                                        <option value="#">Ubicación 1</option>
                                        <option value="#">Ubicación 2</option>
                                        <option value="#">Ubicación 3</option>
                                    </select>
                                        <label for="ubicacion">Ubicación</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <select class="form-select" name="oficial" id="oficial" required>
                                        <option selected>Seleccione una opción</option>
                                        <option value="#">Oficial 1</option>
                                        <option value="#">Oficial 2</option>
                                        <option value="#">Oficial 3</option>
                                    </select>
                                        <label for="oficial">Oficial</label>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-2" for="observaciones">Observaciones</label>
                                    <textarea name="observaciones" id="observaciones" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <h5 class="card-title">Documentación del ciudadano</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docSeguro]" value="0">
                                            <input class="form-check-input me-1" type="checkbox" name="documentos[docSeguro]" value="1" id="docSeguro">
                                            Seguro médico
                                            
                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docCerMed]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docCerMed]" value="1" id="docCerMed">
                                            Certificado médico

                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docRCV]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docRCV]" value="1" id="docRCV">
                                            Responsabilidad civil del vehículo
                                            
                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docCerOri]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docCerOri]" value="1" id="docCerOri">
                                            Certificado de origen
                                            
                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docTitProp]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docTitProp]" value="1" id="docTitProp">
                                            Título de propiedad
                                            
                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docCarneCir]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docCarneCir]" value="1" id="docCarneCir">
                                            Carnet de circulación
                                            
                                        </li>
                                        <li class="list-group-item">
                                            <input hidden name="documentos[docLicencia]" value="0">
                                            <input class="form-check-input" type="checkbox" name="documentos[docLicencia]" value="1" id="docLicencia">
                                            Licencia de conducir
                                            
                                        </li>
                                    </ul>
                                </div>

                                <div class="mb-3 mt-4">
                                    <label for="evidencias" class="form-label">Evidencias fotográficas</label>
                                    <input class="form-control" type="file" id="evidencias" multiple>
                                </div>

                                <hr>
                                <div class="col-6">
                                    <button type="button" class="btn btn-secondary" onclick="mostrarFase(2)">Atrás <i class="ri-arrow-go-back-line"></i></button>
                                    <button style="pointer-events: none;" type="submit" class="btn btn-success">Guardar <i class="ri-save-2-fill"></i></button>
                                </div>
                            </section>

                        {{--
                            <hr>
                            
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary mt-3"><i class=" ri-save-2-fill"></i> Guardar</button>
                                <a href="{{ route('infracciones.index') }}" class="btn btn-secondary mt-3"><i class=" ri-arrow-go-back-fill"></i> Cancelar</a>
                            </div>
                        --}}
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="{{ asset('recursos/assets/img/cr6.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Recuerde...</h5>
                        <p class="card-text">Al registrar una infracción, asegúrese de ingresar la información correcta y completa del infractor, así como los detalles precisos de la infracción cometida.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </section>
    </main>

@endsection