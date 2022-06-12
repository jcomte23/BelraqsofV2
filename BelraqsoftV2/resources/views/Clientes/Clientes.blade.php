@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
<nav class="navbar navbar-light">
    <div class="container-fluid barraSuperior">
        <h1 class="fw-bold">{{ $modulo }}</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#FormularioRegistroClientes"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
    </div>
</nav>

<!-- Modal Registro de Clientes-->
<div class="modal fade" id="FormularioRegistro{{ $modulo }}" tabindex="-1" aria-labelledby="FormularioRegistro{{ $modulo }}Label" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FormularioRegistro{{ $modulo }}Label">Registro de {{ $modulo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="text-center fst-italic needs-validation row formulario" action="{{ route('clienteRegistrar') }}" method="POST">
                    @csrf

                    <!-- NIVEL 1 -->
                    <div class="col-lg-6">
                        <!--- Nombre Cliente --->
                        <div class="d-flex justify-content-center">
                            <label class="form-label ">Nombres</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="text" class="form-control" placeholder="Nombres del cliente" name="Nombres" id="Nombres" value="{{ old('Nombres') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <!-- Apellido -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Apellido</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="text" class="form-control" placeholder="Apellidos de cliente" name="Apellidos" id="Apellidos" value="{{ old('Apellidos') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Apellidos') }}</small>
                    </div>

                    <!-- NIVEL 2 -->
                    <div class="col-lg-3">
                        <!-- tipo documento -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Tipo</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <select class="form-select IngresoDatos form-control" aria-label="Default select example" name="TipoDocumento" id="TipoDocumento" value="{{ old('TipoDocumento') }}">
                                @foreach($TipoDocumentos as $tipo)
                                <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}</option>
                                @endforeach
                            </select>
                        </div>
                        <small class="text-danger">{{ $errors->first('TipoDocumento') }}</small>
                    </div>
                    <div class="col-lg-3">
                        <!-- Documento -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Documento</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="Text" class="form-control" placeholder="Documento" name="Documento" id="Documento" value="{{ old('Documento') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Documento') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Correo</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="text" class="form-control" placeholder="Correo del cliente" name="Correo" id="Correo" value="{{ old('Correo') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Correo') }}</small>
                    </div>

                    <!-- NIVEL 3-->
                    <div class="col-lg-3">
                        <!-- Fecha de nacimiento -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Fecha de nacimiento </label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente" name="FechaNacimiento" id="FechaNacimiento" value="{{ old('FechaNacimiento') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('FechaNacimiento') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <!-- Dirección -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Direccion</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="text" class="form-control" placeholder="Dirección del cliente" name="Direccion" id="Direccion" value="{{ old('Direccion') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Direccion') }}</small>
                    </div>
                    <div class="col-lg-3">
                        <!-- Ciudad o municipio -->
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Ciudad/Municipio</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio" id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Ciudad_Municipio') }}</small>
                    </div>

                    <!-- NIVEL 4-->
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <label class="form-label">Telefono</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                            <input type="number" class="form-control" placeholder="Telefono(s)" name="Telefonos" id="Telefonos" value="{{ old('Telefonos') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                    </div>
                    <div class="col-lg-3">
                        <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Guardar">
            </div>
            </form>
        </div>
    </div>
</div>

@if(session('mensaje'))
<script>
    registroExitosoCompleto();
</script>
@endif

@if(session('clienteActualizado'))
<script>
    registroActualizoCompleto();
</script>
@endif

@if(session('clienteEliminado'))
<script>
    registroEliminadoCompleto();
</script>
@endif

@if(session('ErrorEliminacionCliente'))
<script>
    registroNoEliminado();
</script>
@endif

<table id="myTable" class="table text-center align-middle display">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Tipo</th>
            <th scope="col">Documento</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Operaciones</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @forelse($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->Nombres }}</td>
            <td>{{ $cliente->Apellidos }}</td>
            <td>{{ $cliente->unionTipoDoc->Abreviatura }}</td>
            <td>{{ $cliente->Documento }}</td>
            <td>{{ $cliente->FechaNacimiento }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->Telefonos }}</td>
            <td>
                <form action="{{ route('clienteEliminar',$cliente) }}" method="post" style="display:inline-flex">
                    <a href="#DetallesClientes{{ $cliente->id }}" class="btn btn-success boton-listado" data-bs-toggle="modal" data-bs-target="#DetallesClientes{{ $cliente->id }}"><i class="bi bi-eye-fill"></i></a>

                    <a href="#EdicionClientes{{ $cliente->id }}" class="btn btn-warning boton-listado" data-bs-toggle="modal" data-bs-target="#EdicionClientes{{ $cliente->id }}"><i class="bi bi-pencil-fill"></i></a>
                    @csrf @method('DELETE')
                    <button class="btn btn-danger boton-listado" data-bs-toggle="modal" data-bs-target="#EliminarCliente" type="button"><i class="bi bi-trash-fill"></i></button>

                    <div class="modal fade" id="EliminarCliente" tabindex="-1" aria-labelledby="EliminarClienteLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                        <img class="swal2-image" style="display: none;">
                                        <div class="swal2-icon-content">!</div>
                                    </div>
                                    <h2 class="swal2-title" id="swal2-title" style="display: block;">¿Estas
                                        seguro?</h2>
                                    <div class="swal2-html-container" id="swal2-html-container" style="display: block;">¡El cliente sera eliminado y no podras revertir
                                        este cambio!</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="resp{{ $cliente->id }}" class="form-check form-switch switchEstado">
                        @if($cliente->Estado == 1)
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckDefault" checked>
                        @else
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckDefault">
                        @endif
                    </div>
                </form>
            </td>
        </tr>

        <div class="modal fade" id="DetallesClientes{{ $cliente->id }}" tabindex="-1" aria-labelledby="DetallesClientesLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="DetallesClientesLabel">Detalles de
                            {{ $cliente->Nombres }} {{ $cliente->Apellidos }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5> <strong>Nombre(s): </strong> {{ $cliente->Nombres }}</h5>
                        <h5> <strong>Apellido(s): </strong> {{ $cliente->Apellidos }}</h5>
                        <h5> <strong>Tipo Doc. : </strong> {{ $cliente->unionTipoDoc->Abreviatura }}</h5>
                        <h5> <strong># Documento: </strong> {{ $cliente->Documento }}</h5>
                        <h5> <strong>Fecha Nac: </strong> {{ $cliente->FechaNacimiento }}</h5>
                        <h5> <strong>Correo: </strong> {{ $cliente->Correo }}</h5>
                        <h5> <strong>Telefono(s): </strong> {{ $cliente->Telefonos }}</h5>
                        <h5> <strong>Direccion: </strong> {{ $cliente->Direccion }}</h5>
                        <h5> <strong>Ciudad/Municipio: </strong> {{ $cliente->Ciudad_Municipio }}</h5>
                        @if($cliente->Estado == 1)
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

        <div class="modal fade" id="EdicionClientes{{ $cliente->id }}" tabindex="-1" aria-labelledby="EdicionClientesLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="EdicionClientesLabel">Edicion de
                            {{ $modulo }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body formulario row">
                        <form class="text-center fst-italic needs-validation " action="{{ route('clienteActualizar',$cliente) }}" method="POST">
                            @csrf@method('PUT')

                            <!-- NIVEL 1 -->
                            <div class="col-lg-6">
                                <!--- Nombre Cliente --->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label ">Nombres</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="text" class="form-control" placeholder="Nombres del cliente" name="Nombres" id="Nombres" value="{{ old('Nombres', $cliente->Nombres) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Apellido -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Apellido</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="text" class="form-control" placeholder="Apellidos de cliente" name="Apellidos" id="Apellidos" value="{{ old('Apellidos', $cliente->Apellidos) }}">
                                </div>
                            </div>

                            <!-- NIVEL 2 -->
                            <div class="col-lg-3">
                                <!-- tipo documento -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Tipo</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <select class="form-select IngresoDatos form-control" aria-label="Default select example" name="TipoDocumento" id="TipoDocumento" value="{{ old('TipoDocumento', $cliente->unionTipoDoc->Abreviatura) }}">
                                        @foreach($TipoDocumentos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <!-- Documento -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Documento</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="Text" class="form-control" placeholder="Documento" name="Documento" id="Documento" value="{{ old('Documento', $cliente->Documento) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Correo</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="text" class="form-control" placeholder="Correo del cliente" name="Correo" id="Correo" value="{{ old('Correo', $cliente->Correo) }}">
                                </div>
                            </div>

                            <!-- NIVEL 3-->
                            <div class="col-lg-3">
                                <!-- Fecha de nacimiento -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Fecha de nacimiento </label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente" name="FechaNacimiento" id="FechaNacimiento" value="{{ old('FechaNacimiento', $cliente->FechaNacimiento) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Dirección -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Direccion</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="text" class="form-control" placeholder="Dirección del cliente" name="Direccion" id="Direccion" value="{{ old('Direccion', $cliente->Direccion) }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <!-- Ciudad o municipio -->
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Ciudad/Municipio</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio" id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio', $cliente->Ciudad_Municipio) }}">
                                </div>
                            </div>

                            <!-- NIVEL 4-->
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-center">
                                    <label class="form-label">Telefono</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                                    <input type="number" class="form-control" placeholder="Telefono(s)" name="Telefonos" id="Telefonos" value="{{ old('Telefonos', $cliente->Telefonos) }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                        <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Actualizar">
                    </div>
                    </form>







                </div>
            </div>
        </div>

        @empty
        <tr>Sin clientes</tr>
        @endforelse
    </tbody>
</table>

@if($errors->any())
<script>
    $(document).ready(function() {
        $('#FormularioRegistroClientes').modal('show')
    })
</script>
@endif

@endsection()