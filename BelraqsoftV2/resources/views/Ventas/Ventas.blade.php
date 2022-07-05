@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <h1 class="fw-bold">{{ $modulo }}</h1>

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

    <table id="TableVentas" class="table text-center table-striped  display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">CODG</th>
                <th scope="col">Fecha Venta</th>
                <th scope="col">Cantidad Productos</th>
                <th scope="col">Ganancia</th>
                <th scope="col">Cliente</th>
                <th scope="col">Doc. Cliente</th>
                <th scope="col">Operaciones</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ventas as $venta)
                <tr>
                    <td>{{ $venta->Codigo }}</td>
                    <td>{{ $venta->Fecha }}</td>
                    <td>{{ $venta->CantidadProductos }}</td>
                    <td>${{ $venta->Total }}</td>
                    <td>{{ $venta->unionCliente->Nombres }} {{ $venta->unionCliente->Apellidos }}</td>
                    <td>{{ $venta->unionCliente->Documento }}</td>
                    <td>
                        <form action="#" method="post" style="display:inline-flex">
                            <a href="#DetallesVentas{{ $venta->id }}" class="btn btn-success boton-listado"
                                data-bs-toggle="modal" data-bs-target="#DetallesVentas{{ $venta->id }}"><i
                                    class="bi bi-eye-fill"></i></a>

                            <button class="btn btn-outline-success boton-listado" type="submit"><i
                                    class="bi bi-image"></i></button>
                        </form>
                    </td>
                    <td>
                        <form class="form-check form-switch form-switch-md formulario"
                            action="{{ route('ventaEstado', $venta) }}" method="post">
                            @csrf
                            @if ($venta->Estado == 1)
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input"
                                    id="flexSwitchCheckChecked" checked>
                            @else
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input"
                                    id="flexSwitchCheckDefault">
                            @endif
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="DetallesVentas{{ $venta->id }}" tabindex="-1"
                    aria-labelledby="DetallesVentasLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body row">
                                <div class="col-lg-10">
                                    <h2> <strong>{{ $venta->Codigo }}</strong> </h2>
                                </div>
                                <div class="col-lg-2">
                                    @if ($venta->Estado == 1)
                                        <h2 style="color: green">Activa</h2>
                                    @else
                                        <h2 style="color: red">InActiva</h2>
                                    @endif
                                </div>

                                <div class="col-lg-7">
                                    <br>
                                    <h5><strong>Vendedor</strong></h5>
                                    <h6>{{ $venta->unionUsuario->Nombres }} {{ $venta->unionUsuario->Apellidos }} (
                                        {{ $venta->unionUsuario->unionRol->Nombre }} )</h6>
                                    <h6>{{ $venta->unionUsuario->unionTipoDoc->Abreviatura }}-{{ $venta->unionUsuario->Documento }}
                                    </h6>
                                    <h6>{{ $venta->unionUsuario->Correo }}</h6>
                                </div>
                                <div class="col-lg-5">
                                    <br>
                                    <h5><strong>Cliente</strong></h5>
                                    <h6>{{ $venta->unionCliente->Nombres }} {{ $venta->unionCliente->Apellidos }}</h6>
                                    <h6>{{ $venta->unionCliente->unionTipoDoc->Abreviatura }}-{{ $venta->unionCliente->Documento }}
                                    </h6>
                                    <h6><i class="bi bi-telephone-fill"></i> {{ $venta->unionCliente->Telefonos }}</h6>
                                    <h6><i class="bi bi-map-fill"></i> {{ $venta->unionCliente->Direccion }} (
                                        {{ $venta->unionCliente->Ciudad_Municipio }} )</h6>
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <h5><strong>Fecha: </strong>{{ $venta->Fecha }}</h5>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5><strong>Descripcion</strong></h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5><strong>Cant</strong></h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5><strong>valor</strong></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h6>Producto</h6>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6>#</h6>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6>$$$</h6>
                                        </div>
                                        <div class="col-lg-6">
                                            <h6>Producto</h6>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6>#</h6>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6>$$$</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">

                                        </div>
                                        <div class="col-lg-3">
                                            <h5><strong>Valor:</strong></h5>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5>{{ $venta->Total }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <tr>Sin ventas</tr>
            @endforelse
        </tbody>
    </table>
@endsection
