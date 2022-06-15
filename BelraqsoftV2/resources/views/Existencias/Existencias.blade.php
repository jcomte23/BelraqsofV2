@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <nav class="navbar navbar-light">
        <div class="container-fluid barraSuperior">
            <h1 class="fw-bold">{{ $modulo }}</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistro{{ $modulo }}"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>

    <div class="modal fade" id="FormularioRegistro{{ $modulo }}" tabindex="-1"
        aria-labelledby="FormularioRegistro{{ $modulo }}Label" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioRegistro{{ $modulo }}Label">Registro de
                        {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-validation row formulario"
                        action="{{ route('existenciaRegistrar') }}" method="POST">
                        @csrf

                        <!-- Nivel 1-->
                        <div class="col-md-8">
                            <!-- Nombre producto -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Nombre</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-caret-right-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Nombre del producto" name="Nombre"
                                    id="Nombre" value="{{ old('Nombre') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Nombre') }}</small>
                        </div>

                        <div class="col-md-4">
                            <!-- Marca -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Marca</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-caret-right-fill"></i></span>
                                <input type="text" class="form-control" placeholder="Marca del producto" name="Marca"
                                    id="Marca" value="{{ old('Marca') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Marca') }}</small>
                        </div>

                        <!-- Nivel 2-->
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <!-- Stock -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Stock</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="number" class="form-control" placeholder="Stock Actual" name="Stock"
                                    id="Stock" value="{{ old('Stock') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Stock') }}</small>
                        </div>
                        <div class="col-md-3">
                        </div>

                        <!-- Nivel 3-->
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <!-- Valor unitario -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Valor unitario</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-currency-dollar"></i></span>
                                <input type="number" class="form-control" placeholder="Valor unitario"
                                    name="ValorUnitario" id="ValorUnitario" value="{{ old('ValorUnitario') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('ValorUnitario') }}</small>
                        </div>
                        <div class="col-md-3">
                        </div>

                        <!-- Nivel 4-->
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <!-- Valor a detal -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Valor detal</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-currency-dollar"></i></span>
                                <input type="number" class="form-control" placeholder="Valor dedal" name="PrecioDedal"
                                    id="PrecioDedal" value="{{ old('PrecioDedal') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('PrecioDedal') }}</small>
                        </div>
                        <div class="col-md-3">
                        </div>

                        <!-- Nivel 5-->
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <!-- Valor a por mayor -->
                            <div class="d-flex justify-content-center">
                                <label class="form-label">Valor mayor</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-currency-dollar"></i></i></span>
                                <input type="number" class="form-control" placeholder="Valor mayor" name="PrecioMayor"
                                    id="PrecioMayor" value="{{ old('PrecioMayor') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('PrecioMayor') }}</small>
                        </div>
                        <div class="col-md-3">
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

    @if (session('mensaje'))
        <script>
            registroExitosoCompleto();
        </script>
    @endif

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado();
        </script>
    @endif

    @if (session('registroActualizado'))
        <script>
            registroActualizoCompleto();
        </script>
    @endif

    @if (session('registroEliminado'))
        <script>
            registroEliminadoCompleto();
        </script>
    @endif

    @if (session('ErrorEliminacionRegistro'))
        <script>
            registroNoEliminado();
        </script>
    @endif

    <table id="TableExistencias" class="table text-center table-striped align-middle display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Stock</th>
                <th scope="col">ValorUnitario</th>
                <th scope="col">PrecioDedal</th>
                <th scope="col">PrecioMayor</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @forelse ($existencias as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->Nombre }}</td>
                    <td>{{ $producto->Marca }}</td>
                    <td>{{ $producto->Stock }}</td>
                    <td>${{ $producto->ValorUnitario }}</td>
                    <td>${{ $producto->PrecioDedal }}</td>
                    <td>${{ $producto->PrecioMayor }}</td>
                    <td>
                        <form action="{{ route('existenciaEliminar', $producto) }}" method="post"
                            style="display:inline-flex">
                            <a href="#DetallesExistencias{{ $producto->id }}" class="btn btn-success boton-listado"
                                data-bs-toggle="modal" data-bs-target="#DetallesExistencias{{ $producto->id }}"><i
                                    class="bi bi-eye-fill"></i></a>

                            <a href="#EdicionExistencias{{ $producto->id }}" class="btn btn-warning boton-listado"
                                data-bs-toggle="modal" data-bs-target="#EdicionExistencias{{ $producto->id }}"><i
                                    class="bi bi-pencil-fill"></i></a>
                            @csrf @method('DELETE')
                            <button class="btn btn-danger boton-listado" data-bs-toggle="modal"
                                data-bs-target="#EliminarProducto" type="button"><i class="bi bi-trash-fill"></i></button>

                            <div class="modal fade" id="EliminarProducto" tabindex="-1"
                                aria-labelledby="EliminarProductoLabel" aria-hidden="true">
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
                                                style="display: block;">¡El Producto sera eliminado y no podras revertir
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
                        <form action="{{ route('productoEstado', $producto) }}" method="post">
                            @csrf
                            @if ($producto->Estado == 1)
                                <input type="hidden" name="Estado" id="Estado" class="form-control" value="0">
                                <button type="submit" class="btn btn-primary">Activo</button>
                            @else
                                <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                                <button type="submit" class="btn btn-secondary">Inactivo</button>
                            @endif
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="DetallesExistencias{{ $producto->id }}" tabindex="-1"
                    aria-labelledby="DetallesExistenciasLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DetallesExistenciasLabel">Detalles de
                                    {{ $producto->Nombre }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5> <strong>Nombre: </strong> {{ $producto->Nombre }}</h5>
                                <h5> <strong>Marca: </strong> {{ $producto->Marca }}</h5>
                                <h5> <strong>Stock: </strong> {{ $producto->Stock }}</h5>
                                <h5> <strong>Valor Unitario: </strong> {{ $producto->ValorUnitario }}</h5>
                                <h5> <strong>Precio al X dedal: </strong> {{ $producto->PrecioDedal }}</h5>
                                <h5> <strong>Precio al X mayor: </strong> {{ $producto->PrecioMayor }}</h5>
                                @if ($producto->Estado == 1)
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

                <div class="modal fade" id="EdicionExistencias{{ $producto->id }}" tabindex="-1"
                    aria-labelledby="EdicionExistenciasLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EdicionExistenciasLabel">Edicion de
                                    {{ $modulo }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body formulario row">
                                <form class="text-center fst-italic needs-validation "
                                    action="{{ route('existenciaActualizar', $producto) }}" method="POST">
                                    @csrf @method('PUT')

                                    <!-- Nivel 1-->
                                    <div class="col-md-8">
                                        <!-- Nombre producto -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Nombre</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-caret-right-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Nombre del producto"
                                                name="Nombre" id="Nombre" value="{{ old('Nombre', $producto->Nombre) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <!-- Marca -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Marca</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-caret-right-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Marca del producto"
                                                name="Marca" id="Marca" value="{{ old('Marca', $producto->Marca) }}">
                                        </div>
                                    </div>

                                    <!-- Nivel 2-->
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Stock -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Stock</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-asterisk"></i></span>
                                            <input type="number" class="form-control" placeholder="Stock Actual"
                                                name="Stock" id="Stock" value="{{ old('Stock', $producto->Stock) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    </div>

                                    <!-- Nivel 3-->
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Valor unitario -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Valor unitario</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-currency-dollar"></i></span>
                                            <input type="number" class="form-control" placeholder="Valor unitario"
                                                name="ValorUnitario" id="ValorUnitario"
                                                value="{{ old('ValorUnitario', $producto->ValorUnitario) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    </div>

                                    <!-- Nivel 4-->
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Valor a detal -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Valor detal</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-currency-dollar"></i></span>
                                            <input type="number" class="form-control" placeholder="Valor dedal"
                                                name="PrecioDedal" id="PrecioDedal" value="{{ old('PrecioDedal', $producto->PrecioDedal) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    </div>

                                    <!-- Nivel 5-->
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Valor a por mayor -->
                                        <div class="d-flex justify-content-center">
                                            <label class="form-label">Valor mayor</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-currency-dollar"></i></i></span>
                                            <input type="number" class="form-control" placeholder="Valor mayor"
                                                name="PrecioMayor" id="PrecioMayor" value="{{ old('PrecioMayor', $producto->PrecioMayor) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                <tr>Sin productos</tr>
            @endforelse
        </tbody>
    </table>

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                $('#FormularioRegistroExistencias').modal('show')
            })
        </script>
    @endif
@endsection
