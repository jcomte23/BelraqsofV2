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
        aria-labelledby="FormularioRegistro{{ $modulo }}Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistro{{ $modulo }}Label">Registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-vblaalidation row formulario" action="{{ route('usuarioRegistrar') }}" method="POST">
                        @csrf
                        <!-- NIVEL 1 -->
                        <div class="col-lg-12">
                            {{-- Nombre Usuario --}}
                            <div class="d-flex">
                                <label class="form-label ">Nombres</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Nombres del usuario" name="Nombres"
                                    id="Nombres" value="{{ old('Nombres') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                        </div>
                        <div class="col-lg-12">
                            {{-- Apellidos Usuario --}}
                            <div class="d-flex ">
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
                        <div class="col-lg-12">
                            {{-- Tipo Documento --}}
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
                            {{-- Documento --}}
                            <div class="d-flex ">
                                <label class="form-label">Documento</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="Text" class="form-control" placeholder="Documento del usuario" name="Documento"
                                    id="Documento" value="{{ old('Documento') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Documento') }}</small>
                        </div>

                        
                        <div class="col-lg-12">
                            {{-- Fehca de expedición --}}
                            <div class="d-flex ">
                                <label class="form-label">Fecha de expedición </label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar3"></i></span>
                                <input type="date" class="form-control" 
                                name="FechaExpedicion" id="FechaExpedicion" value="{{ old('FechaExpedicion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('FechaExpedicion') }}</small>
                        </div>

                        <div class="col-lg-12">
                            {{-- Rol --}}
                            <div class="d-flex ">
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
                        <div class="col-lg-12">
                            {{-- Correo --}}
                            <div class="d-flex ">
                                <label class="form-label">Correo</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                <input type="text" class="form-control" placeholder="Correo del usuario" name="Correo"
                                    id="Correo" value="{{ old('Correo') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Correo') }}</small>
                        </div>

                        
                        <div class="col-lg-12">
                            {{-- Telefonos --}}
                            <div class="d-flex ">
                                <label class="form-label">Teléfonos</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                <input type="number" class="form-control" placeholder="Teléfono(s) del usuario" name="Telefonos"
                                    id="Telefonos" value="{{ old('Teléfonos') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Teléfonos') }}</small>
                        </div>

                        <!-- NIVEL 4 -->
                        <div class="col-lg-12">
                            {{-- Dirrección --}}
                            <div class="d-flex ">
                                <label class="form-label">Dirección</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Dirección del usuario"
                                    name="Direccion" id="Direccion" value="{{ old('Direccion') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Dirrección') }}</small>
                        </div>

                        
                        <div class="col-lg-12">
                            {{-- Ciudad o Municipio --}}
                            <div class="d-flex ">
                                <label class="form-label">Ciudad/Municipio</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio"
                                placeholder="Ciudad/municipio del usuario"
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
            registroExitosoCompleto("Usuario registrado");
        </script>
    @endif

    @if (session('RegistroActualizado'))
        <script>
            registroActualizoCompleto("Usuario actualizado correctamente");
        </script>
    @endif

    @if (session('RegistroEliminado'))
        <script>
            registroEliminadoCompleto("Usuario Eliminado");
        </script>
    @endif

    @if (session('ErrorEliminacionRegistro'))
        <script>
            registroNoEliminado("Este cliente ya tiene una venta asociada,para mantener un mejor historial te recomendamos desactivarlo");
        </script>
    @endif

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

    
    <table class="table table-striped text-center display" id="TableUsuarios" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo</th>
                <th scope="col">Rol</th>
                <th scope="col">Documento</th>
                <th scope="col">Correo</th>
                <th scope="col">Dirección</th>
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
                    <a href="#EdicionUsuarios{{ $usuario->id }}" class="btn btn-warning boton-listado"
                        data-bs-toggle="modal" data-bs-target="#EdicionUsuarios{{ $usuario->id }}"><i
                            class="bi bi-pencil-fill"></i></a>
                    <a href="#DetalleUsuario{{ $usuario->id }}" class="btn btn-success boton-listado"
                            data-bs-toggle="modal" data-bs-target="#DetalleUsuario{{ $usuario->id }}"><i
                                class="bi bi-eye-fill"></i></a>
                    <form action="{{ route('usuarioEliminar', $usuario) }}" method="post"
                        style="display:inline-flex">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger boton-listado" data-bs-toggle="modal"
                            data-bs-target="#EliminarUsuario" type="button"><i class="bi bi-trash-fill"></i></button>
                        <div class="modal fade" id="EliminarUsuario" tabindex="-1"
                            aria-labelledby="EliminarUsuarioLabel" aria-hidden="true">
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
                                            style="display: block;">¡El usuario {{$usuario->Nombres}} {{$usuario->Apellidos}} 
                                            sera eliminado y no podras revertir este cambio!</div>
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
                    
                    <form class="form-check form-switch form-switch-md" action="{{ route('usuarioEstado', $usuario) }}" method="post">
                        @csrf
                        @if ($usuario->Estado == 1)
                            <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckChecked" checked>
                        @else
                        <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckDefault">
                        @endif
                    </form>
                </td>
            </tr>
        
            {{-- Modal Editar Usuario --}}
            <div class="modal fade" id="EdicionUsuarios{{ $usuario->id }}" tabindex="-1"
                aria-labelledby="EdicionUsuariosLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="EdicionUsuariosLabel{{ $modulo }}Label">Edición de usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="text-center fst-italic needs-validation row formulario" action="{{ route('usuarioActualizar',$usuario) }}" method="POST">
                                @csrf @method('PUT')
                                <!-- NIVEL 1 -->
                                <div class="col-lg-12">
                                    {{-- Nombre Usuario --}}
                                    <div class="d-flex">
                                        <label class="form-label ">Nombres</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Nombres del usuario" name="Nombres"
                                            id="Nombres" value="{{ old('Nombres',$usuario->Nombres) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                                </div>
                                <div class="col-lg-12">
                                    {{-- Apellidos Usuario --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Apellidos</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                        <input type="text" class="form-control" placeholder="Apellidos del usuario"
                                            name="Apellidos" id="Apellidos" value="{{ old('Apellidos',$usuario->Apellidos) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Apellidos') }}</small>
                                </div>
        
                                <!-- NIVEL 2 -->
                                <div class="col-lg-12">
                                    {{-- Tipo Documento --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Tipo</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-caret-right-fill"></i></span>
                                        <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                            name="TipoDocumento" id="TipoDocumento" value="{{ old('TipoDocumento') }}">
                                            <option selected="true" value="{{$usuario->TipoDocumento}}">{{$usuario->unionTipoDoc->Abreviatura}}</option>
                                            @foreach ($TipoDocumentos as $tipo)
                                                @if ($tipo->id != $usuario->TipoDocumento)
                                                <option value="{{ $tipo->id }}">{{ $tipo->Abreviatura }}</option>
                                                @endif   
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('TipoDocumento') }}</small>
                                </div>
                                
                                <div class="col-lg-12">
                                    {{-- Documento --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Documento</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                        <input type="Text" class="form-control" placeholder="Documento" name="Documento"
                                            id="Documento" value="{{ old('Documento',$usuario->Documento) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Documento') }}</small>
                                </div>
        
                                
                                <div class="col-lg-12">
                                    {{-- Fecha de expedición --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Fecha de expedición </label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar3"></i></span>
                                        <input type="date" class="form-control" placeholder="Fecha de expedición"
                                            name="FechaExpedicion" id="FechaExpedicion" value="{{ old('FechaExpedicion',$usuario->FechaExpedicion) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Fecha de Expedición') }}</small>
                                </div>
        
                                <div class="col-lg-12">
                                    {{-- Rol --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Rol</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-caret-right-fill"></i></span>
                                        <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                            name="Rol" id="Rol" value="{{ old('Rol') }}">
                                            <option selected="true" value="{{$usuario->Rol}}">{{$usuario->unionRol->Nombre}}</option>
                                            @foreach ($Roles as $Rol)
                                                @if ($Rol->id != $usuario->TipoDocumento)
                                                <option value="{{ $Rol->id }}">{{ $Rol->Nombre }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Rol') }}</small>
                                </div>
        
        
                                <!-- NIVEL 3 -->
                                <div class="col-lg-12">
                                    {{-- Correo --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Correo</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-at"></i></span>
                                        <input type="text" class="form-control" placeholder="Correo del usuario" name="Correo"
                                            id="Correo" value="{{ old('Correo',$usuario->Correo )}}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Correo') }}</small>
                                </div>
                                  
                                <div class="col-lg-12">
                                    {{-- Teléfonos --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Teléfonos</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                        <input type="number" class="form-control" placeholder="Teléfono(s) del usuario" name="Telefonos"
                                            id="Telefonos" value="{{ old('Teléfonos',$usuario->Telefonos) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Teléfonos') }}</small>
                                </div>
        
                                <!-- NIVEL 4 -->
                                <div class="col-lg-12">
                                    {{-- Dirrección --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Dirección</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                        <input type="text" class="form-control" placeholder="Dirección del usuario"
                                            name="Direccion" id="Direccion" value="{{ old('Direccion',$usuario->Direccion) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Dirrección') }}</small>
                                </div>
        
                                
                                <div class="col-lg-12">
                                    {{-- Ciudad o Municipio --}}
                                    <div class="d-flex ">
                                        <label class="form-label">Ciudad/Municipio</label>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-map-fill"></i></span>
                                        <input class="IngresoDatos form-control" type="text" name="Ciudad_Municipio" 
                                        placeholder="Ciudad o municipio del usuario"
                                        id="Ciudad_Municipio" value="{{ old('Ciudad_Municipio',$usuario->Ciudad_Municipio) }}">
                                    </div>
                                    <small class="text-danger">{{ $errors->first('Ciudad_Municipio') }}</small>
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
