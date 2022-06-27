@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
<nav class="navbar navbar-light">
    <div class="container-fluid">
        <h1 class="fw-bold">{{ $modulo }}</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#FormularioRegistroUsuarios"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
    </div>
</nav>

    <!-- Modal Registro -->
    <div class="modal fade" id="FormularioRegistro{{ $modulo }}" tabindex="-1"
        aria-labelledby="FormularioRegistro{{ $modulo }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistro{{ $modulo }}Label">Registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-vblaalidation row formulario" action="{{ route('usuarioRegistrar') }}" method="POST">
                        @csrf
                        <!-- NIVEL 1 -->
                        <div class="col-lg-6">
                            {{-- Nombre Usuario --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label ">Nombres</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombres del usuario" name="Nombres"
                                    id="Nombres" value="{{ old('Nombres') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                        </div>
                        <div class="col-lg-6">
                            {{-- Apellidos Usuario --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Apellidos</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Apellidos del usuario"
                                    name="Apellidos" id="Apellidos" value="{{ old('Apellidos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Apellidos') }}</small>
                        </div>

                        <!-- NIVEL 2 -->
                        <div class="col-lg-3">
                            {{-- Tipo Documento --}}
                            <div class="d-flex justify-content-center">
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
                        
                        <div class="col-lg-3">
                            {{-- Documento --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Documento</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="Text" class="form-control" placeholder="Documento" name="Documento"
                                    id="Documento" value="{{ old('Documento') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Documento') }}</small>
                        </div>

                        
                        <div class="col-lg-3">
                            {{-- Fehca de expedición --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Fecha de expedición </label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar3"></i></span>
                                <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente"
                                    name="FechaExpedicion" id="FechaExpedicion" value="{{ old('FechaExpedicion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('FechaExpedicion') }}</small>
                        </div>

                        <div class="col-lg-3">
                            {{-- Rol --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Rol</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                    class="bi bi-caret-right-fill"></i></span>
                                <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                    name="Rol" id="Rol" value="{{ old('Rol') }}">
                                    @foreach ($Roles as $Rol)
                                        <option value="{{ $Rol->id }}">{{ $Rol->Nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('Rol') }}</small>
                        </div>


                        <!-- NIVEL 3 -->
                        <div class="col-lg-6">
                            {{-- Correo --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Correo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                <input type="text" class="form-control" placeholder="Correo del usuario" name="Correo"
                                    id="Correo" value="{{ old('Correo') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Correo') }}</small>
                        </div>

                        
                        <div class="col-lg-6">
                            {{-- Telefonos --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Teléfonos</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                <input type="number" class="form-control" placeholder="Telefono(s)" name="Telefonos"
                                    id="Telefonos" value="{{ old('Telefonos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Telefonos') }}</small>
                        </div>

                        <!-- NIVEL 4 -->
                        <div class="col-lg-7">
                            {{-- Dirrección --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Dirección</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Dirección del cliente"
                                    name="Direccion" id="Direccion" value="{{ old('Direccion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Direccion') }}</small>
                        </div>

                        
                        <div class="col-lg-5">
                            {{-- Ciudad o Municipio --}}
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Ciudad/Municipio</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio"
                                    id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Ciudad_Municipio') }}</small>
                        </div>

                        {{-- Estado --}}
                        <div >
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

    
    <table class="table table-striped text-center display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo</th>
                <th scope="col">Rol</th>
                <th scope="col">Documento</th>
                <th scope="col">Correo</th>
                <th scope="col">Direccion</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($usuarios as $usuario)
            <tr>
                <td>{{$usuario->Nombres}}</td>
                <td>{{$usuario->Apellidos}}</td>
                <td>{{$usuario->unionTipoDoc->Abreviatura}}</td>
                <td>{{$usuario->unionRol->Nombre}}</td>
                <td>{{$usuario->Documento}}</td>
                <td>{{$usuario->Correo}}</td>
                <td>{{$usuario->Direccion}}</td>
                <td>{{$usuario->Telefonos}}</td>
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
                        
                    </div>
                </td>
                <td>
                    <div class="col-lg-4 botones-operaciones form-check form-switch">
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckChecked" checked>
                    </div>
                </td>
            </tr>
            @empty
                <tr>Sin clientes</tr>
            @endforelse
            
        </tbody>
    </table>
    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#FormularioRegistroUsuarios').modal('show')
            })
        </script>
    @endif
@endsection
