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
                    <h5 class="modal-title" id="FormularioRegistroProveedoresLabel">Registro de
                        {{ $modulo }}</h5>
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

                                <label class="label">Ingrese nombre o razon
                                    social:</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
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
                                        class="material-icons align-middle"></i></span>
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="NumeroIdenNit" name="NumeroIdenNit"
                                    id="NumeroIdenNit" value="{{ old('NumeroIdenNit') }}">
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Telefonos" name="Telefonos"
                                    id="Telefonos" value="{{ old('Telefonos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                        </div>


                        <!--Direccion -->
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <label class="label">Direccion</label><br>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Ciudad_Municipio"
                                    name="Ciudad_Municipio" id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio') }}">
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="NombreContacto" name="NombreContacto"
                                    id="NombreContacto" value="{{ old('NombreContacto') }}">
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="NumeroContacto" name="NumeroContacto"
                                    id="NumeroContacto" value="{{ old('NumeroContacto') }}">
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
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Correo" name="Correo" id="Correo"
                                    value="{{ old('Correo') }}">
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
                            <span class="input-group-text" id="basic-addon1"><i
                                    class="material-icons align-middle"></i></span>
                            <input type="textarea" class="form-control" placeholder="Descripcion" name="Descripcion"
                                id="Descripcion" value="{{ old('Descripcion') }}">
                        </div>
                        <small class="text-danger">{{ $errors->first('Descripcion') }}</small>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Actualizar">
                </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('mensaje'))
        <script>
            registroExitosoSimple();
        </script>
    @endif

    @if (session('proveedorActualizado'))
        <script>
            registroActualizoSimple();
        </script>
    @endif

    @if (session('proveedorEliminado'))
        <script>
            registroEliminadoSimple();
        </script>
    @endif

    <table id="myTable" class="table text-center align-middle display">
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
                        <form action="#" method="post" style="display:inline-flex">
                            <button class="btn btn-danger boton-listado" type="submit"><i
                                    class="bi bi-trash-fill"></i></button>
                            <button type="button" class="btn btn-warning boton-listado" data-bs-toggle="modal"
                                data-bs-target="#FormularioEdicionProveedores"><i class="bi bi-pencil-fill"></i></button>
                            <div class="form-check form-switch switchEstado">
                                @if ($Proveedor->Estado == 1)
                                    <input class="form-check-input switchEstado" type="checkbox"
                                        id="flexSwitchCheckDefault" checked>
                                @else
                                    <input class="form-check-input switchEstado" type="checkbox"
                                        id="flexSwitchCheckDefault">
                                @endif
                            </div>
                        </form>
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
                                        <form class="text-center fst-italic needs-validation row formulario" method="post">
                                            <form class="text-center fst-italic needs-validation row formulario"
                                                method="POST">
                                                <!-- NIVEL 1 -->
                                                <div class="col-lg-5">
                                                    <label class="label">Ingrese nombre o razon
                                                        social:</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtNombre"
                                                        placeholder="" required>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="label">Tipo:</label><br>
                                                    <select class="form-select IngresoDatos form-control"
                                                        aria-label="Default select example" name="txtTipo_Doc" required>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="label">Numero / NIT:</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtNumero"
                                                        placeholder="" required>
                                                </div>

                                                <!-- NIVEL 2 -->
                                                <!---->
                                                <div class="col-lg-3">
                                                    <label class="label">Telefono</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txttelefono"
                                                        placeholder="" required>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="label">Direccion</label><br>
                                                    <input class="IngresoDatos form-control" type="text"
                                                        name="txtDireccion" placeholder="" required>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label class="label">Ciudad / Municipio</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtCiudad"
                                                        placeholder="" required>
                                                </div>

                                                <!-- NIVEL 3 -->
                                                <!---->
                                                <div class="col-lg-8">
                                                    <label class="label">Ingrese nombre del
                                                        contacto:</label><br>
                                                    <input class="IngresoDatos form-control" type="text" name="txtContacto"
                                                        placeholder="" required>
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
                                                    <input class="IngresoDatos form-control" type="text" name="txtCorreo"
                                                        required>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="label">Descripcion del
                                                        proveedor:</label><br>
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

                    </td>
                </tr>
            @empty
                <tr>Sin proveedores</tr>
            @endforelse
        </tbody>

    </table>
@endsection
