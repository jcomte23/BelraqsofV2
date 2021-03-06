@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <h1 class="fw-bold">{{ $modulo }}</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistroClientes"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>


    <!-- Modal Registro de Clientes-->
    <div class="modal fade" id="FormularioRegistro{{ $modulo }}" tabindex="-1"
        aria-labelledby="FormularioRegistro{{ $modulo }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistro{{ $modulo }}Label">Registro de
                        {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-vblaalidation row formulario"
                        action="{{ route('clienteRegistrar') }}" method="POST">
                        @csrf

                        <!-- NIVEL 1 -->
                        <div class="col-lg-12">
                            <!--- Nombre Cliente --->
                            <div class="d-flex">
                                <label class="form-label ">Nombres</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombres del cliente" name="Nombres"
                                    id="Nombres" value="{{ old('Nombres') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <!-- Apellido -->
                            <div class="d-flex">
                                <label class="form-label">Apellido</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Apellidos de cliente"
                                    name="Apellidos" id="Apellidos" value="{{ old('Apellidos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Apellidos') }}</small>
                        </div>

                        <!-- NIVEL 2 -->
                        <div class="col-lg-12">
                            <!-- tipo documento -->
                            <div class="d-flex ">
                                <label class="form-label">Tipo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                    class="bi bi-caret-right-fill"></i></span>
                                <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                    name="TipoDocumento" id="TipoDocumento" value="{{ old('TipoDocumento') }}">
                                    @foreach ($TipoDocumentos as $tipo)
                                        <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('TipoDocumento') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <!-- Documento -->
                            <div class="d-flex">
                                <label class="form-label">Documento</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="Text" class="form-control" placeholder="Documento" name="Documento"
                                    id="Documento" value="{{ old('Documento') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Documento') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex">
                                <label class="form-label">Correo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                <input type="text" class="form-control" placeholder="Correo del cliente" name="Correo"
                                    id="Correo" value="{{ old('Correo') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Correo') }}</small>
                        </div>

                        <!-- NIVEL 3-->
                        <div class="col-lg-12">
                            <!-- Fecha de nacimiento -->
                            <div class="d-flex ">
                                <label class="form-label">Fecha de nacimiento </label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar3"></i></span>
                                <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente"
                                    name="FechaNacimiento" id="FechaNacimiento" value="{{ old('FechaNacimiento') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('FechaNacimiento') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <!-- Direcci??n -->
                            <div class="d-flex">
                                <label class="form-label">Direcci??n</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Direcci??n del cliente"
                                    name="Direccion" id="Direccion" value="{{ old('Direccion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Direccion') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <!-- Ciudad o municipio -->
                            <div class="d-flex">
                                <label class="form-label">Ciudad/Municipio</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input class="IngresoDatos form-control" type="text" placeholder="Ciudad o municipio" name="Ciudad_Municipio"
                                    id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Ciudad_Municipio') }}</small>
                        </div>

                        <!-- NIVEL 4-->
                        <div class="col-lg-12">
                            <div class="d-flex">
                                <label class="form-label">Tel??fono</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                <input type="number" class="form-control" placeholder="Tel??fono(s)" name="Telefonos"
                                    id="Telefonos" value="{{ old('Telefonos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                        </div>
                        <div>
                            <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input class="btn botonConfirmar" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('RegistroGuardado'))
        <script>
            registroExitosoCompleto("Cliente registrado");
        </script>
    @endif

    @if (session('RegistroActualizado'))
        <script>
            registroActualizoCompleto("Cliente actualizado correctamente");
        </script>
    @endif

    @if (session('RegistroEliminado'))
        <script>
            registroEliminadoCompleto("cliente Eliminado");
        </script>
    @endif

    @if (session('ErrorEliminacionRegistro'))
        <script>
            registroNoEliminado("Este cliente ya tiene una venta asociada,para mantener un mejor historial te recomendamos desactivalo");
        </script>
    @endif

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

    <table id="TableClientes" class="table table-striped text-center display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Documento</th>
                <th scope="col">Direcci??n</th>
                <th scope="col">Tel??fono</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->Nombres }}</td>
                    <td>{{ $cliente->Apellidos }}</td>
                    <td>{{ $cliente->unionTipoDoc->Abreviatura }}-{{ $cliente->Documento }}</td>
                    <td>{{ $cliente->Direccion }} ( {{ $cliente->Ciudad_Municipio }} )</td>
                    <td>{{ $cliente->Telefonos }}</td>
                    <td>
                        <form action="{{ route('clienteEliminar', $cliente) }}" method="post"
                            style="display:inline-flex">
                            <a href="#DetallesClientes{{ $cliente->id }}" class="btn btn-success boton-listado"
                                data-bs-toggle="modal" data-bs-target="#DetallesClientes{{ $cliente->id }}"><i
                                    class="bi bi-eye-fill"></i></a>

                            <a href="#EdicionClientes{{ $cliente->id }}" class="btn btn-warning boton-listado"
                                data-bs-toggle="modal" data-bs-target="#EdicionClientes{{ $cliente->id }}"><i
                                    class="bi bi-pencil-fill"></i></a>
                            @csrf @method('DELETE')
                            <button class="btn btn-danger boton-listado" data-bs-toggle="modal"
                                data-bs-target="#EliminarCliente" type="button"><i class="bi bi-trash-fill"></i></button>

                            <div class="modal fade" id="EliminarCliente" tabindex="-1"
                                aria-labelledby="EliminarClienteLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                                <img class="swal2-image" style="display: none;">
                                                <div class="swal2-icon-content">!</div>
                                            </div>
                                            <h2 class="swal2-title" id="swal2-title" style="display: block;">??Estas
                                                seguro?</h2>
                                            <div class="swal2-html-container" id="swal2-html-container"
                                                style="display: block;">??El cliente sera eliminado y no podras revertir
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
                        <form class="form-check form-switch form-switch-md formulario" action="{{ route('clienteEstado', $cliente) }}" method="post">
                            @csrf
                            @if ($cliente->Estado == 1)
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckChecked" checked>
                            @else
                            <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckDefault">
                            @endif
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="DetallesClientes{{ $cliente->id }}" tabindex="-1"
                    aria-labelledby="DetallesClientesLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body row">
                                <div class="col-lg-9">
                                    <h2> <strong>{{ $cliente->Nombres }} {{ $cliente->Apellidos }}</strong> </h2>
                                </div>
                                <div class="col-lg-3">
                                    @if ($cliente->Estado == 1)
                                        <h2 style="color: green">Activo</h2>
                                    @else
                                        <h2 style="color: red">InActivo</h2>
                                    @endif
                                </div>

                                <div class="col-lg-5">
                                    <br>
                                    <h5><strong>{{ $cliente->unionTipoDoc->Abreviatura}}</strong></h5>
                                    <h6>{{ $cliente->Documento}}</h6>
                                </div>
                                <div class="col-lg-7">
                                    <br>
                                    <h5><strong>Fecha Nac</strong></h5>
                                    <h6>{{ $cliente->FechaNacimiento }}</h6>
                                </div>

                                <div class="col-lg-5">
                                    <h5><strong>Tel??fono(s)</strong></h5>
                                    <h6>{{ $cliente->Telefonos }}</h6>
                                </div>
                                <div class="col-lg-7">
                                    <h5><strong>Correo</strong></h5>
                                    <h6>{{ $cliente->Correo }}</h6>
                                </div>

                                <div class="col-lg-12">
                                    <br>
                                    <h5><strong>Direcci??n</strong></h5>
                                    <h6>{{ $cliente->Direccion }} ({{ $cliente->Ciudad_Municipio }})</h6>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="EdicionClientes{{ $cliente->id }}" tabindex="-1"
                    aria-labelledby="EdicionClientesLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EdicionClientesLabel">Edicion de
                                    {{ $modulo }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="text-center fst-italic needs-validation "
                                    action="{{ route('clienteActualizar', $cliente) }}" method="POST">
                                    @csrf @method('PUT')

                                    <!-- NIVEL 1 -->
                                    <div class="col-lg-12">
                                        <!--- Nombre Cliente --->
                                        <div class="d-flexr">
                                            <label class="form-label ">Nombres</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" class="form-control" placeholder="Nombres del cliente"
                                                name="Nombres" id="Nombres"
                                                value="{{ old('Nombres', $cliente->Nombres) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Apellido -->
                                        <div class="d-flex">
                                            <label class="form-label">Apellido</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                            <input type="text" class="form-control" placeholder="Apellidos de cliente"
                                                name="Apellidos" id="Apellidos"
                                                value="{{ old('Apellidos', $cliente->Apellidos) }}">
                                        </div>
                                    </div>

                                    <!-- NIVEL 2 -->
                                    <div class="col-lg-12">
                                        <!-- tipo documento -->
                                        <div class="d-flex">
                                            <label class="form-label">Tipo</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-caret-right-fill"></i></span>
                                            <select class="form-select IngresoDatos form-control"
                                                aria-label="Default select example" name="TipoDocumento" id="TipoDocumento"
                                                value="{{ old('TipoDocumento', $cliente->unionTipoDoc->Abreviatura) }}">
                                                <option selected="true" value="{{ $cliente->TipoDocumento }}">
                                                    {{ $cliente->unionTipoDoc->Abreviatura }}</option>
                                                @foreach ($TipoDocumentos as $tipo)
                                                    @if ($tipo->id != $cliente->TipoDocumento)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Documento -->
                                        <div class="d-flex">
                                            <label class="form-label">Documento</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                            <input type="Text" class="form-control" placeholder="Documento"
                                                name="Documento" id="Documento"
                                                value="{{ old('Documento', $cliente->Documento) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex">
                                            <label class="form-label">Correo</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                            <input type="text" class="form-control" placeholder="Correo del cliente"
                                                name="Correo" id="Correo" value="{{ old('Correo', $cliente->Correo) }}">
                                        </div>
                                    </div>

                                    <!-- NIVEL 3-->
                                    <div class="col-lg-12">
                                        <!-- Fecha de nacimiento -->
                                        <div class="d-flex">
                                            <label class="form-label">Fecha de nacimiento </label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar3"></i></span>
                                            <input type="date" class="form-control"
                                                placeholder="Fecha de nacimiento del cliente" name="FechaNacimiento"
                                                id="FechaNacimiento"
                                                value="{{ old('FechaNacimiento', $cliente->FechaNacimiento) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Direcci??n -->
                                        <div class="d-flex">
                                            <label class="form-label">Direcci??n</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Direcci??n del cliente"
                                                name="Direccion" id="Direccion"
                                                value="{{ old('Direccion', $cliente->Direccion) }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- Ciudad o municipio -->
                                        <div class="d-flex">
                                            <label class="form-label">Ciudad/Municipio</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                            <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio"
                                                id="Ciudad_Municipio"
                                                value="{{ old('Ciudad_Municipio', $cliente->Ciudad_Municipio) }}">
                                        </div>
                                    </div>

                                    <!-- NIVEL 4-->
                                    <div class="col-lg-12">
                                        <div class="d-flex">
                                            <label class="form-label">Tel??fono</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                            <input type="number" class="form-control" placeholder="Telefono(s)"
                                                name="Telefonos" id="Telefonos"
                                                value="{{ old('Telefonos', $cliente->Telefonos) }}">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
                                <input class="btn botonConfirmar" type="submit" value="Actualizar">
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

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#FormularioRegistroClientes').modal('show')
            })
        </script>
    @endif
@endsection()
