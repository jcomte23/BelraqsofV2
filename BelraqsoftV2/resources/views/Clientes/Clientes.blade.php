@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')


    <nav class="navbar navbar-light">
        <div class="container-fluid barraSuperior">
            <h1 class="fw-bold">{{ $modulo }}</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistroClientes"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>

    <div class="modal fade" id="FormularioRegistroClientes" tabindex="-1"
        aria-labelledby="FormularioRegistroClientesLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistroClientesLabel">Registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-validation row formulario" method="get">
                        <!-- NIVEL 1 -->
                        <div class="col-lg-6">
                            <!--- Nombre Cliente --->
                            <div class="d-flex justify-content-center">
                                <label class="form-label ">Nombres</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombres del cliente" name=""
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Apellido -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Apellido</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Apellidos de cliente" name="">
                            </div>
                        </div>

                        <!-- NIVEL 2 -->
                        <div class="col-lg-3">
                            <!-- Apellido -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Tipo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                    name="txtTipo_Doc" required>
                                    <option value="">Seleccione...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- Documento -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Documento</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="Text" class="form-control" placeholder="Documento" name="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Correo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Correo del cliente" name="">
                            </div>
                        </div>

                        <!-- NIVEL 3-->
                        <div class="col-lg-3">
                            <!-- Fecha de nacimiento -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Fecha de nacimiento </label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente"
                                    name="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Dirección -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Direccion</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Dirección del cliente" name="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <!-- Ciudad o municipio -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Ciudad/Municipio</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input class="IngresoDatos form-control" type="text" name="txtCiudad" required>
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="number" class="form-control" placeholder="Telefono(s)" name="">
                            </div>
                        </div>
                        <div class="col-lg-3">
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

    <table id="myTable" class="table text-center align-middle display">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo</th>
                <th scope="col">Documento</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Dirección</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Operaciones</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @forelse ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->Nombres }}</td>
                    <td>{{ $cliente->Apellidos }}</td>
                    <td>{{ $cliente->unionTipoDoc->Abreviatura }}</td>
                    <td>{{ $cliente->Documento }}</td>
                    <td>{{ $cliente->Correo }}</td>
                    <td>{{ $cliente->FechaNacimiento }}</td>
                    <td>{{ $cliente->Direccion }}</td>
                    <td>{{ $cliente->Telefonos }}</td>
                    <td>
                        <form action="#" method="post" style="display:inline-flex">
                            <button type="button" class="btn btn-warning boton-listado" data-bs-toggle="modal"
                                data-bs-target="#FormularioEdicionClientes"><i class="bi bi-pencil-fill"></i></button>
                            <div class="form-check form-switch switchEstado">
                                <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckChecked"
                                    checked>
                            </div>
                        </form>
                        <div class="modal fade" id="FormularioEdicionClientes" tabindex="-1"
                            aria-labelledby="FormularioEdicionClientesLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="FormularioEdicionClientesLabel">Edicion de
                                            {{ $modulo }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="text-center fst-italic needs-validation row formulario" method="get">
                                            <!-- NIVEL 1 -->
                                            <div class="col-lg-6">
                                                <!--- Nombre Cliente --->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label ">Nombres</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Nombres del cliente" name="" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Apellido -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Apellido</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Apellidos de cliente" name="">
                                                </div>
                                            </div>

                                            <!-- NIVEL 2 -->
                                            <div class="col-lg-3">
                                                <!-- Apellido -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Tipo</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <select class="form-select IngresoDatos form-control"
                                                        aria-label="Default select example" name="txtTipo_Doc" required>
                                                        <option value="">Seleccione...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!-- Documento -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Documento</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="Text" class="form-control" placeholder="Documento"
                                                        name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Correo</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Correo del cliente" name="">
                                                </div>
                                            </div>

                                            <!-- NIVEL 3-->
                                            <div class="col-lg-3">
                                                <!-- Fecha de nacimiento -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Fecha de nacimiento </label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="date" class="form-control"
                                                        placeholder="Fecha de nacimiento del cliente" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <!-- Dirección -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Direccion</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="text" class="form-control"
                                                        placeholder="Dirección del cliente" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <!-- Ciudad o municipio -->
                                                <div class="d-flex justify-content-center">
                                                    <label class="form-label">Ciudad/Municipio</label>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input class="IngresoDatos form-control" type="text" name="txtCiudad"
                                                        required>
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
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="material-icons align-middle"></i></span>
                                                    <input type="number" class="form-control" placeholder="Telefono(s)"
                                                        name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Guardar">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>Sin clientes</tr>
            @endforelse
        </tbody>
    </table>
@endsection
