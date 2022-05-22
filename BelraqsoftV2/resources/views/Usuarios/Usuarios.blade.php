@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <h1 class="fw-bold">{{ $modulo }}</h1>
    <nav class="navbar navbar-light">
        <div class="container-fluid buscador" style="padding-right: 0px;">
            <form class="d-flex" method="get" action="{{ url('/' . $modulo) }}">
                <input class="form-control me-2" type="search" placeholder="Buscar" name="datoBuscado" aria-label="Search">
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistroUsuarios"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="FormularioRegistroUsuarios" tabindex="-1"
        aria-labelledby="FormularioRegistroUsuariosLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistroUsuariosLabel">registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-validation row formulario" method="get">
                        <!-- NIVEL 1 -->
                        <div class="col-lg-6">
                            <label class="form-label">Nombre(s):</label><br>
                            <input class="IngresoDatos form-control" type="text" name="txtNombre"
                                placeholder="Ejemplo:Maria Camila" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Apellidos(s):</label><br>
                            <input class="IngresoDatos form-control" type="text" name="txtApellido"
                                placeholder="Ejemplo: Ortiz" required>
                        </div>

                        <!-- NIVEL 2 -->
                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label">Tipo:</label><br>
                            <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                name="txtTipo_Doc" required>
                                <option value="">Seleccione...</option>
                            </select>
                        </div>
                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label"># Documento:</label><br>
                            <input class="IngresoDatos form-control" type="number" name="txtDocumento"
                                placeholder="#Documento sin punto decimal" required>
                        </div>

                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label">Rol:</label><br>
                            <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                name="txtTipo_rol" required>
                                <option value="">Seleccione...</option>
                            </select>
                        </div>
                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label">Estado:</label><br>
                            <!-- <input class="IngresoDatos form-control" type="text" name="txtEstado" value="Activo" required> -->
                            <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                name="txtEstado" required>
                                <option>Activo</option>
                                <option>Inactivo</option>
                            </select>
                        </div>

                        <!-- NIVEL 3 -->
                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label">Fecha Exp:</label><br>
                            <input class="IngresoDatos form-control" type="date" name="txtFechaExpedicionDocumento"
                                required>
                        </div>

                        <!---->
                        <div class="col-lg-6">
                            <label class="form-label">E-mail</label><br>
                            <input class="IngresoDatos form-control" type="email" name="txtCorreo"
                                placeholder="Ejemplo: Mariaortiz2022@gmai.com" required>
                        </div>

                        <!---->
                        <div class="col-lg-3">
                            <label class="form-label">Contraseña:</label><br>
                            <input class="IngresoDatos form-control" type="password" name="txtContraseña"
                                placeholder="Contraseña Alfanumerica">
                        </div>

                        <!-- NIVEL 4 -->
                        <!---->
                        <div class="col-lg-7">
                            <label class="form-label">Direccion:</label><br>
                            <input class="IngresoDatos form-control" type="text" name="txtDireccion" required>
                        </div>

                        <!---->
                        <div class="col-lg-5">
                            <label class="form-label">Ciudad/Municipio:</label><br>
                            <input class="IngresoDatos form-control" type="text" name="txtCiudad" required>
                        </div>

                        <!-- NIVEL 5 -->
                        <!---->
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-4">
                            <label class="form-label">Telefono(s):</label><br>
                            <input class="IngresoDatos form-control" type="text" name="txtTelefono"
                                placeholder="fijo o movil" required>
                        </div>
                        <div class="col-lg-4">
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

    <h6>Usuarios registrados: 1</h6>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Rol</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellidos(s)</th>
                <th scope="col">Tipo Doc</th>
                <th scope="col">#Documento</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono(s)</th>
                <th scope="col">Estado</th>
                <th scope="col">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rol</td>
                <td>NombreUsuario</td>
                <td>ApellidosUsuario</td>
                <td>TipoDocumento</td>
                <td>documento</td>
                <td>CorreoUsuario</td>
                <td>DireccionUsuario</td>
                <td>TelfUsuario</td>
                <td>Estado</td>
                <td>
                    <div class="row">
                        <div class="col-lg-4 botones-operaciones">
                            <form method="get" action="{{ url('/' . $modulo) }}">
                                <button class="btn btn-danger" type="submit"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-4 botones-operaciones">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#FormularioEdicionUsuarios"><i class="bi bi-pencil-fill"></i></button>
                            <!-- Modal -->
                            <div class="modal fade" id="FormularioEdicionUsuarios" tabindex="-1"
                                aria-labelledby="FormularioEdicionUsuariosLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="FormularioEdicionUsuariosLabel">Edicion de
                                                {{ $modulo }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="text-center fst-italic needs-validation row formulario"
                                                method="post">
                                                <!-- NIVEL 1 -->
                                                <div class="col-lg-6">
                                                    <label class="form-label">Nombre(s):</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtNombre"
                                                        value="" placeholder="Ejemplo:Maria Camila" required>
                                                </div>

                                                <!---->
                                                <div class="col-lg-6">
                                                    <label class="form-label">Apellidos(s):</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtApellido"
                                                        value="" placeholder="Ejemplo: Ortiz" required>
                                                </div>

                                                <!-- NIVEL 2 -->
                                                <!---->
                                                <div class="col-lg-3">
                                                    <label class="form-label">Tipo:</label><br>
                                                    <select class="form-select IngresoDatos form-control"
                                                        aria-label="Default select example" name="txtTipo_Doc" required>
                                                    </select>
                                                </div>

                                                <div class="col-lg-3">
                                                    <label class="form-label"># Documento:</label><br>
                                                    <input name="txtidUsuario" type="hidden" value="">
                                                    <input class="IngresoDatos form-control" type="number"
                                                        name="txtDocumento" value=""
                                                        placeholder="#Documento sin punto decimal" required>
                                                </div>

                                                <div class="col-lg-3">
                                                    <label class="form-label">Rol:</label><br>
                                                    <select class="form-select IngresoDatos form-control"
                                                        aria-label="Default select example" name="txtTipo_rol" required>
                                                    </select>
                                                </div>

                                                <!---->
                                                <div class="col-lg-3">
                                                    <label class="form-label">Estado:</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtEstado"
                                                        readonly="readonly" value="" placeholder="Ejemplo:Maria Camila"
                                                        required>
                                                </div>

                                                <!---->


                                                <!-- NIVEL 3 -->
                                                <!---->
                                                <div class="col-lg-3">
                                                    <label class="form-label">Fecha Exp:</label><br>
                                                    <input class="IngresoDatos form-control" type="date"
                                                        name="txtFechaExpedicionDocumento" value="" required>
                                                </div>

                                                <!---->
                                                <div class="col-lg-6">
                                                    <label class="form-label">E-mail</label><br>
                                                    <input class="IngresoDatos form-control" type="email" name="txtCorreo"
                                                        value="" placeholder="Ejemplo: Mariaortiz2022@gmai.com" required>
                                                </div>

                                                <!---->
                                                <div class="col-lg-3">
                                                    <label class="form-label">Contraseña:</label><br>
                                                    <input class="IngresoDatos form-control" type="password"
                                                        name="txtContraseña" value="" placeholder="Contraseña Alfanumerica">
                                                </div>

                                                <!-- NIVEL 4 -->
                                                <!---->
                                                <div class="col-lg-7">
                                                    <label class="form-label">Direccion:</label><br>
                                                    <input class="IngresoDatos form-control" type="text"
                                                        name="txtDireccion" value="" required>
                                                </div>

                                                <!---->
                                                <div class="col-lg-5">
                                                    <label class="form-label">Ciudad/Municipio:</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtCiudad"
                                                        value="" required>
                                                </div>

                                                <!-- NIVEL 5 -->
                                                <!---->
                                                <div class="col-lg-4">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-label">Telefono(s):</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtTelefono"
                                                        value="" required>
                                                </div>
                                                <div class="col-lg-4">
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
                        <div class="col-lg-4 botones-operaciones form-check form-switch">
                            <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
