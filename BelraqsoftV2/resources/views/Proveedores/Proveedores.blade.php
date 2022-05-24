@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <h1 class="fw-bold">{{ $modulo }}</h1>
    <nav class="navbar">
        <div class="container p-0">
            <form class="d-flex" action="{{ url('/' . $modulo) }}" method="get">
                <input class="form-control me-2 " placeholder="Buscar">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistroProveedores"><i class="bi bi-person-plus-fill"></i> Nuevo</button>

            <!-- Modal -->
            <div class="modal fade" id="FormularioRegistroProveedores" tabindex="-1"
            aria-labelledby="FormularioRegistroProveedoresLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="FormularioRegistroProveedoresLabel">Registro de
                            {{ $modulo }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="text-center fst-italic needs-validation row formulario"
                            method="post">
                            <form class="text-center fst-italic needs-validation row formulario"
                                method="POST">
                                <!-- NIVEL 1 -->
                                <div class="col-lg-5">
                                    <label class="label">Ingrese nombre o razon
                                        social:</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtNombre" placeholder="" required>
                                </div>
                                <div class="col-lg-3">
                                    <label class="label">Tipo:</label><br>
                                    <select class="form-select IngresoDatos form-control"
                                        aria-label="Default select example" name="txtTipo_Doc" required>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label class="label">Numero / NIT:</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtNumero" placeholder="" required>
                                </div>

                                <!-- NIVEL 2 -->
                                <!---->
                                <div class="col-lg-3">
                                    <label class="label">Telefono</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txttelefono" placeholder="" required>
                                </div>
                                <div class="col-lg-6">
                                    <label class="label">Direccion</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtDireccion" placeholder="" required>
                                </div>
                                <div class="col-lg-3">
                                    <label class="label">Ciudad / Municipio</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtCiudad" placeholder="" required>
                                </div>

                                <!-- NIVEL 3 -->
                                <!---->
                                <div class="col-lg-8">
                                    <label class="label">Ingrese nombre del
                                        contacto:</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtContacto" placeholder="" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="label">Ingrese numero del
                                        contacto:</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtNumeroContacto" placeholder="" required>
                                </div>

                                <!-- NIVEL 4-->
                                <!---->
                                <div class="col-lg-12">
                                    <label class="label">Correo:</label><br>
                                    <input class="IngresoDatos form-control" type="text"
                                        name="txtCorreo" required>
                                </div>
                                <div class="col-lg-12">
                                    <label class="label">Descripcion del proveedor:</label><br>
                                    <input class="IngresoDatos form-control" style="height: 80px;"
                                        type="textarea" name="txtDescripcion" placeholder=" ">
                                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancelar</button>
                        <input class="btn btn-success confirmar_o_cancelar" type="submit"
                            value="Actualizar">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre / Razon social</th>
                <th scope="col">Nombre del contacto</th>
                <th scope="col">Numero / NIT</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Direccion</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Esika S.A</td>
                <td>Julio Martinez</td>
                <td>809384335-k</td>
                <td>juliomar@esika.com.co</td>
                <td>6045783424</td>
                <td>Distribuidora de cosmetico a nivel nacional</td>
                <td>Av 32 Dg 42 ee-23</td>
                <td>
                    <div class="row">
                        <div class="col-lg-4 botones-operaciones">
                            <form method="get" action="{{ url('/' . $modulo) }}">
                                <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-4 botones-operaciones">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#FormularioEdicionProveedores"><i class="bi bi-pencil-fill"></i></button>
                            <!-- Modal -->
                            <div class="modal fade" id="FormularioEdicionProveedores" tabindex="-1"
                                aria-labelledby="FormularioEdicionProveedoresLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="FormularioEdicionProveedoresLabel">Edicion de
                                                {{ $modulo }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="text-center fst-italic needs-validation row formulario"
                                                method="post">
                                                <form class="text-center fst-italic needs-validation row formulario"
                                                    method="POST">
                                                    <!-- NIVEL 1 -->
                                                    <div class="col-lg-5">
                                                        <label class="label">Ingrese nombre o razon
                                                            social:</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtNombre" placeholder="" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="label">Tipo:</label><br>
                                                        <select class="form-select IngresoDatos form-control"
                                                            aria-label="Default select example" name="txtTipo_Doc" required>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Numero / NIT:</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtNumero" placeholder="" required>
                                                    </div>

                                                    <!-- NIVEL 2 -->
                                                    <!---->
                                                    <div class="col-lg-3">
                                                        <label class="label">Telefono</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txttelefono" placeholder="" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="label">Direccion</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtDireccion" placeholder="" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="label">Ciudad / Municipio</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtCiudad" placeholder="" required>
                                                    </div>

                                                    <!-- NIVEL 3 -->
                                                    <!---->
                                                    <div class="col-lg-8">
                                                        <label class="label">Ingrese nombre del
                                                            contacto:</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtContacto" placeholder="" required>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="label">Ingrese numero del
                                                            contacto:</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtNumeroContacto" placeholder="" required>
                                                    </div>

                                                    <!-- NIVEL 4-->
                                                    <!---->
                                                    <div class="col-lg-12">
                                                        <label class="label">Correo:</label><br>
                                                        <input class="IngresoDatos form-control" type="text"
                                                            name="txtCorreo" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="label">Descripcion del proveedor:</label><br>
                                                        <input class="IngresoDatos form-control" style="height: 80px;"
                                                            type="textarea" name="txtDescripcion" placeholder=" ">
                                                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <input class="btn btn-success confirmar_o_cancelar" type="submit"
                                                value="Actualizar">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 botones-operaciones form-switch">
                            <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckChecked"
                                checked>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
