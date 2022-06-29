@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <nav class="navbar navbar-light">
        <div class="container-fluid ">
            <h1 class="fw-bold">{{ $modulo }}</h1>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#FormularioRegistro{{ $modulo }}"><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </div>
    </nav>

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
                    <form class=" fst-italic needs-validation row "
                        action="{{ route('existenciaRegistrar') }}" method="POST">
                        @csrf

                        <!-- Nivel 1-->
                        <div class="col-md-12">
                            <!-- Nombre producto -->
                            <div class="d-flex">
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

                        <div class="col-md-12">
                            <!-- Marca -->
                            <div class="d-flex">
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
                        <div class="col-md-12">
                            <!-- Stock -->
                            <div class="d-flex">
                                <label class="form-label">Stock</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-asterisk"></i></span>
                                <input type="number" class="form-control" placeholder="Stock Actual" name="Stock"
                                    id="Stock" value="{{ old('Stock') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Stock') }}</small>
                        </div>

                        <!-- Nivel 3-->
                        <div class="col-md-12">
                            <!-- Valor unitario -->
                            <div class="d-flex">
                                <label class="form-label">Valor unitario</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-currency-dollar"></i></span>
                                <input type="number" class="form-control" placeholder="Valor unitario" name="ValorUnitario"
                                    id="ValorUnitario" value="{{ old('ValorUnitario') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('ValorUnitario') }}</small>
                        </div>

                        <!-- Nivel 4-->
                        <div class="col-md-12">
                            <!-- Valor a detal -->
                            <div class="d-flex">
                                <label class="form-label">Valor detal</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="bi bi-currency-dollar"></i></span>
                                <input type="number" class="form-control" placeholder="Valor detal" name="PrecioDedal"
                                    id="PrecioDedal" value="{{ old('PrecioDedal') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('PrecioDedal') }}</small>
                        </div>

                        <!-- Nivel 5-->
                        <div class="col-md-12">
                            <!-- Valor a por mayor -->
                            <div class="d-flex">
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
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input class="btn botonConfirmar" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>
    </div>

    @if (session('RegistroGuardado'))
        <script>
            registroExitosoCompleto("Producto registrado");
        </script>
    @endif

    @if (session('RegistroActualizado'))
        <script>
            registroActualizoCompleto("Producto actualizado correctamente");
        </script>
    @endif

    @if (session('RegistroEliminado'))
        <script>
            registroEliminadoCompleto("Producto Eliminado");
        </script>
    @endif

    @if (session('ErrorEliminacionRegistro'))
        <script>
            registroNoEliminado("Este producto ya tiene una venta asociada,para mantener un mejor historial te recomendamos desactivalo");
        </script>
    @endif

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

    <table id="TableExistencias" class="table text-center table-striped align-middle display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Marca</th>
                <th scope="col">Stock</th>
                <th scope="col">Valor unitario</th>
                <th scope="col">Precio detal</th>
                <th scope="col">Precio mayor</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
            </tr>
        </thead>
        <tbody>
            @forelse ($existencias as $producto)
                <tr>
                    <td>{{ $producto->Nombre }}</td>
                    <td>{{ $producto->Marca }}</td>
                    <td>{{ $producto->Stock }}</td>
                    <td>${{ $producto->ValorUnitario }}</td>
                    <td>${{ $producto->PrecioDetal }}</td>
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
                                data-bs-target="#EliminarProducto" type="button"><i
                                    class="bi bi-trash-fill"></i></button>

                            <div class="modal fade" id="EliminarProducto" tabindex="-1"
                                aria-labelledby="EliminarProductoLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="swal2-icon swal2-warning swal2-icon-show" style="display: flex;">
                                                <img class="swal2-image" style="display: none;">
                                                <div class="swal2-icon-content">!</div>
                                            </div>
                                            <h2 class="swal2-title" id="swal2-title" style="display: block;">¿Estás
                                                seguro?</h2>
                                            <div class="swal2-html-container" id="swal2-html-container"
                                                style="display: block;">¡El Producto será eliminado y no podrás revertir
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
                        <form class="form-check form-switch form-switch-md formulario" action="{{ route('productoEstado', $producto) }}" method="post">
                            @csrf
                            @if ($producto->Estado == 1)
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckChecked" checked>
                            @else
                            <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckDefault">
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
                                <h5> <strong>Precio al X detal: </strong> {{ $producto->PrecioDetal }}</h5>
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
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="EdicionExistenciasLabel">Edición de
                                    {{ $modulo }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <form class="text-center fst-italic needs-validation "
                                    action="{{ route('existenciaActualizar', $producto) }}" method="POST">
                                    @csrf @method('PUT')

                                    <!-- Nivel 1-->
                                    <div class="col-md-12">
                                        <!-- Nombre producto -->
                                        <div class="d-flex">
                                            <label class="form-label">Nombre</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-caret-right-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Nombre del producto"
                                                name="Nombre" id="Nombre"
                                                value="{{ old('Nombre', $producto->Nombre) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Marca -->
                                        <div class="d-flex">
                                            <label class="form-label">Marca</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-caret-right-fill"></i></span>
                                            <input type="text" class="form-control" placeholder="Marca del producto"
                                                name="Marca" id="Marca"
                                                value="{{ old('Marca', $producto->Marca) }}">
                                        </div>
                                    </div>

                                    <!-- Nivel 2-->
                                    <div class="col-md-12">
                                        <!-- Stock -->
                                        <div class="d-flex">
                                            <label class="form-label">Stock</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-asterisk"></i></span>
                                            <input type="number" class="form-control" placeholder="Stock Actual"
                                                name="Stock" id="Stock"
                                                value="{{ old('Stock', $producto->Stock) }}">
                                        </div>
                                    </div>

                                    <!-- Nivel 3-->
                                    <div class="col-md-12">
                                        <!-- Valor unitario -->
                                        <div class="d-flex">
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

                                    <!-- Nivel 4-->
                                    <div class="col-md-12">
                                        <!-- Valor a detal -->
                                        <div class="d-flex">
                                            <label class="form-label">Valor detal</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-currency-dollar"></i></span>
                                            <input type="number" class="form-control" placeholder="Valor detal"
                                                name="PrecioDetal" id="PrecioDetal"
                                                value="{{ old('PrecioDetal', $producto->PrecioDetal) }}">
                                        </div>
                                    </div>

                                    <!-- Nivel 5-->
                                    <div class="col-md-12">
                                        <!-- Valor a por mayor -->
                                        <div class="d-flex">
                                            <label class="form-label">Valor mayor</label>
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="bi bi-currency-dollar"></i></i></span>
                                            <input type="number" class="form-control" placeholder="Valor mayor"
                                                name="PrecioMayor" id="PrecioMayor"
                                                value="{{ old('PrecioMayor', $producto->PrecioMayor) }}">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="Estado" id="Estado" class="form-control" value="1">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">cancelar</button>
                                <input class="btn botonConfirmar" type="submit" value="Actualizar">
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
