@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')

    <nav class="navbar navbar-light">
        <div class="container-fluid barraSuperior">
            <h1 class="fw-bold">{{ $modulo }}</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistroProveedores"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>

    <div class="modal fade" id="FormularioRegistroProveedores" tabindex="-1"
        aria-labelledby="FormularioRegistroProveedoresLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistroProveedoresLabel">Registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-validation row formulario"
                        action="{{ route('proveedorRegistrar') }}" method="POST">
                        @csrf
                        <!-- NIVEL 1 -->
                        <!-- Nombre razon social 1 -->
                        <div class="col-lg-5">
                            <div class="d-flex justify-content-center">
                                <label class="label">Ingrese nombre o razon social:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombres del cliente"
                                    name="NombreRazonSocial" id="NombreRazonSocial"
                                    value="{{ old('NombreRazonSocial') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('NombreRazonSocial') }}</small>
                        </div>

                        <!-- Tipo de documento -->
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-center">
                                <label class="label">Tipo:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                    class="bi bi-caret-right-fill"></i></span>
                                <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                    name="TipoDocumento" id="TipoDocumento" value="{{ old('TipoDocumento') }}">
                                    @foreach ($Documentos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('TipoDocumento') }}</small>
                        </div>

                        <!-- nit -->
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-center">
                                <label class="label">Numero / NIT:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="text" class="form-control" placeholder="NumeroIdenNit" name="NumeroIdenNit"
                                    id="NumeroIdenNit" value="{{ old('NumeroIdenNit') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('NumeroIdenNit') }}</small>
                        </div>

                        <!-- NIVEL 2 -->
                        <!--telefono  -->
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-center">
                                <label class="label">Teléfono</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Telefonos" name="Telefonos"
                                    id="Telefonos" value="{{ old('Telefonos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                        </div>


                        <!--Direccion -->
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <label class="label">Dirección</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Direccion" name="Direccion"
                                    id="Direccion" value="{{ old('Direccion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Direccion') }}</small>
                        </div>

                        <!-- Ciudad -->



                        <div class="col-lg-3">
                            <div class="d-flex justify-content-center">
                                <label class="label">Ciudad / Municipio</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Ciudad_Municipio"
                                    name="Ciudad_Municipio" id="Ciudad_Municipio"
                                    value="{{ old('Ciudad_Municipio') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Ciudad_Municipio') }}</small>
                        </div>

                        <!-- NIVEL 3 -->
                        <!--Nombre de contacto-->
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-center">
                                <label class="label">Ingrese nombre del
                                    contacto:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="NombreContacto"
                                    name="NombreContacto" id="NombreContacto" value="{{ old('NombreContacto') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('NombreContacto') }}</small>
                        </div>

                        <!--Numero de contacto -->
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-center">
                                <label class="label">Ingrese número del
                                    contacto:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                <input type="text" class="form-control" placeholder="NumeroContacto"
                                    name="NumeroContacto" id="NumeroContacto" value="{{ old('NumeroContacto') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('NumeroContacto') }}</small>
                        </div>

                        <!-- NIVEL 4-->
                        <!--Correo-->
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-center">
                                <label class="label">Correo:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                <input type="text" class="form-control" placeholder="Correo" name="Correo"
                                    id="Correo" value="{{ old('Correo') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Correo') }}</small>
                        </div>

                        <!-- Descripcion -->
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-center">
                                <label class="label">Descripcion del proveedor:</label><br>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-blockquote-left"></i></span>
                            <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                            <input type="textarea" class="form-control" placeholder="Descripcion" name="Descripcion"
                                id="Descripcion" value="{{ old('Descripcion') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Descripcion') }}</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('RegistroGuardado'))
        <script>
            registroExitosoCompleto("Proveedor registrado");
        </script>
    @endif

    @if (session('RegistroActualizado'))
        <script>
            registroActualizoCompleto("Proveedor actualizado correctamente");
        </script>
    @endif

    @if (session('RegistroEliminado'))
        <script>
            registroEliminadoCompleto("Proveedor Eliminado");
        </script>
    @endif

    @if (session('ErrorEliminacionRegistro'))
        <script>
            registroNoEliminado(
                "Este proveedor ya tiene una venta asociada,para mantener un mejor historial te recomendamos desactivalo");
        </script>
    @endif

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif
    
    <table id="TableProveedores" class="table text-center table-striped align-middle display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Razon social</th>
                <th scope="col">Documento</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Contacto Interno</th>
                <th scope="col">Teléfono Contacto</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Proveedores as $Proveedor)
                <tr>
                    <td>{{ $Proveedor->NombreRazonSocial }}</td>
                    <td>{{ $Proveedor->unionTipoDoc->Abreviatura }}-{{ $Proveedor->NumeroIdenNit }}</td>
                    <td>{{ $Proveedor->Descripcion }}</td>
                    <td>{{ $Proveedor->NombreContacto }}</td>
                    <td>{{ $Proveedor->NumeroContacto }}</td>
                    <td>{{ $Proveedor->Correo }}</td>
                    <td>{{ $Proveedor->Direccion }}</td>
                    <td>
                        <form action="{{ route('ProveedorEliminar', $Proveedor) }}" method="post"
                            style="display:inline-flex">
                            <a href="#DetallesProveedores{{ $Proveedor->id }}" class="btn btn-success boton-listado"
                                data-bs-toggle="modal" data-bs-target="#DetallesProveedores{{ $Proveedor->id }}"><i
                                    class="bi bi-eye-fill"></i></a>

                            <a href="#EdicionProveedores{{ $Proveedor->id }}" class="btn btn-warning boton-listado"
                                data-bs-toggle="modal" data-bs-target="#EdicionProveedores{{ $Proveedor->id }}"><i
                                    class="bi bi-pencil-fill"></i></a>
                            @csrf @method('DELETE')
                            <button class="btn btn-danger boton-listado" data-bs-toggle="modal"
                                data-bs-target="#EliminarProveedor" type="button"><i
                                    class="bi bi-trash-fill"></i></button>

                            <div class="modal fade" id="EliminarProveedor" tabindex="-1"
                                aria-labelledby="EliminarClienteLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                                <img class="swal2-image" style="display: none;">
                                                <div class="swal2-icon-content">!</div>
                                            </div>
                                            <h2 class="swal2-title" id="swal2-title" style="display: block;">¿Estas
                                                seguro?</h2>
                                            <div class="swal2-html-container" id="swal2-html-container"
                                                style="display: block;">¡El proveedor sera eliminado y no podras revertir
                                                este cambio!</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-success">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form class="form-check form-switch form-switch-md" action="{{ route('proveedorEstado', $Proveedor) }}" method="post">
                            @csrf
                            @if ($Proveedor->Estado == 1)
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckChecked" checked>
                            @else
                            <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckDefault">
                            @endif
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="DetallesProveedores{{ $Proveedor->id }}" tabindex="-1"
                    aria-labelledby="DetallesProveedoresLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DetallesProveedoresLabel">Detalles de
                                    {{ $Proveedor->NombreRazonSocial }} {{ $Proveedor->NombreContacto }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5> <strong>Razon social: </strong> {{ $Proveedor->NombreRazonSocial }}</h5>
                                <h5> <strong>Documento: </strong> {{ $Proveedor->unionTipoDoc->Abreviatura }}</h5>
                                <h5> <strong>Descripcion : </strong> {{ $Proveedor->Descripcion }}</h5>
                                <h5> <strong>Contacto interno: </strong> {{ $Proveedor->NombreContacto }}</h5>
                                <h5> <strong>Telefono Contacto: </strong> {{ $Proveedor->NumeroContacto }}</h5>
                                <h5> <strong>Correo: </strong> {{ $Proveedor->Correo }}</h5>
                                <h5> <strong>Direccion: </strong> {{ $Proveedor->Direccion }}</h5>
                                @if ($Proveedor->Estado == 1)
                                    <h5 style="color: green"><strong style="color: gray">Estado: </strong>Activo</h5>
                                @else
                                    <h5 style="color: red"><strong style="color: gray">Estado: </strong>InActivo</h5>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="EdicionProveedores{{ $Proveedor->id }}" tabindex="-1"
                    aria-labelledby="EdicionProveedoresLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EdicionProveedoresLabel">Edicion de
                                    {{ $modulo }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body formulario row">
                                <form class="text-center fst-italic needs-validation "
                                    action="{{ route('proveedorActualizar', $Proveedor) }}" method="POST">
                                    @csrf @method('PUT')
                                    <!-- NIVEL 1 -->
                                    <!-- Nombre razon social 1 -->
                                    <div class="col-lg-5">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Ingrese nombre o razon social:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" class="form-control"
                                                placeholder="Nombres del proveedor" name="NombreRazonSocial"
                                                id="NombreRazonSocial" value="{{ old('NombreRazonSocial', $Proveedor->NombreRazonSocial) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('NombreRazonSocial') }}</small>
                                    </div>

                                    <!-- Tipo de documento -->
                                    <div class="col-lg-3">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Tipo:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-caret-right-fill"></i></span>
                                            <select class="form-select IngresoDatos form-control"
                                                aria-label="Default select example" name="TipoDocumento"
                                                id="TipoDocumento" value="{{ old('TipoDocumento', $Proveedor->unionTipoDoc->Abreviatura) }}">
                                                @foreach ($Documentos as $tipo)
                                                    <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <small class="text-danger">{{ $errors->first('TipoDocumento') }}</small>
                                    </div>

                                    <!-- nit -->
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Numero / NIT:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                            <input type="text" class="form-control" placeholder="NumeroIdenNit"
                                                name="NumeroIdenNit" id="NumeroIdenNit"
                                                value="{{ old('NumeroIdenNit', $Proveedor->NumeroIdenNit) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('NumeroIdenNit') }}</small>
                                    </div>

                                    <!-- NIVEL 2 -->
                                    <!--telefono  -->
                                    <div class="col-lg-3">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Telefono</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Telefonos"
                                                name="Telefonos" id="Telefonos" value="{{ old('Telefonos', $Proveedor->Telefonos) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                                    </div>


                                    <!--Direccion -->
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Direccion</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Direccion"
                                                name="Direccion" id="Direccion" value="{{ old('Direccion', $Proveedor->Direccion) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('Direccion') }}</small>
                                    </div>

                                    <!-- Ciudad -->



                                    <div class="col-lg-3">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Ciudad / Municipio</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Ciudad_Municipio"
                                                name="Ciudad_Municipio" id="Ciudad_Municipio"
                                                value="{{ old('Ciudad_Municipio') }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('Ciudad_Municipio', $Proveedor->Ciudad_Municipio) }}</small>
                                    </div>

                                    <!-- NIVEL 3 -->
                                    <!--Nombre de contacto-->
                                    <div class="col-lg-8">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Ingrese nombre del
                                                contacto:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" class="form-control" placeholder="NombreContacto"
                                                name="NombreContacto" id="NombreContacto"
                                                value="{{ old('NombreContacto', $Proveedor->NombreContacto) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('NombreContacto') }}</small>
                                    </div>

                                    <!--Numero de contacto -->
                                    <div class="col-lg-4">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Ingrese numero del
                                                contacto:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="NumeroContacto"
                                                name="NumeroContacto" id="NumeroContacto"
                                                value="{{ old('NumeroContacto', $Proveedor->NumeroContacto) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('NumeroContacto') }}</small>
                                    </div>

                                    <!-- NIVEL 4-->
                                    <!--Correo-->
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Correo:</label><br>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                            <input type="text" class="form-control" placeholder="Correo"
                                                name="Correo" id="Correo" value="{{ old('Correo', $Proveedor->Correo) }}">
                                        </div>
                                        <small class="text-danger">{{ $errors->first('Correo') }}</small>
                                    </div>

                                    <!-- Descripcion -->
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-center">
                                            <label class="label">Descripcion del proveedor:</label><br>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-blockquote-left"></i></span>
                                        <input type="hidden" name="Estado" id="Estado" class="form-control"
                                            value="1">
                                        <input type="textarea" class="form-control" placeholder="Descripcion"
                                            name="Descripcion" id="Descripcion" value="{{ old('Descripcion', $Proveedor->Descripcion) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Descripcion') }}</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Actualizar">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                </td>
                </tr>
            @empty
                <tr>Sin proveedores</tr>
            @endforelse
        </tbody>
    </table>

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#FormularioRegistroProveedores').modal('show')
            })
        </script>
    @endif
@endsection
