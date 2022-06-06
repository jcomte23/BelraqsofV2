@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{ $modulo }}</h1>
<nav class="navbar">
    <div class="container p-0">
        <form class="d-flex" action="{{ url('/' . $modulo) }}" method="get">
            <input class="form-control me-2 " placeholder="Buscar">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>

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

<table class="table text-center align-middle">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODG</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">ValorUnitario</th>
            <th scope="col">Stock</th>
            <th scope="col">PrecioDedal</th>
            <th scope="col">Telefono</th>
            <th scope="col">PrecioMayor</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @forelse ($existencias as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->Codigo}}</td>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>${{$producto->ValorUnitario}}</td>
            <td>{{$producto->Stock}}</td>
            <td>${{$producto->PrecioDedal}}</td>
            <td>${{$producto->PrecioMayor}}</td>
            <td>
                <div class="row">
                    <div class="col-lg-6 botones-operaciones">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#FormularioEdicionClientes"><i class="bi bi-pencil-fill"></i></button>
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
                                        <form class="text-center fst-italic needs-validation row formulario"
                                            method="get">
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
                                                    <input class="IngresoDatos form-control" type="text"
                                                        name="txtCiudad" required>
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
                                                    <input type="number" class="form-control"
                                                        placeholder="Telefono(s)" name="">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <input class="btn btn-success confirmar_o_cancelar" type="submit"
                                            value="Guardar">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 botones-operaciones form-check form-switch">
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckChecked"
                            checked>
                    </div>
                </div>
            </td>
        </tr>
        @empty
            <tr>Sin productos</tr>
        @endforelse
    </tbody>
</table>
@endsection