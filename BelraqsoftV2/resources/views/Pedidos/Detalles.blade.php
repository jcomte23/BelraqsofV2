@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')

@if($errors->any)
<ul>
    @foreach($errors->all() as $e)
    <li>
        {{$e}}
    </li>
    @endforeach
</ul>
@endif

<nav class="navbar navbar-light">
    <div class="container-fluid">
        <h1 class="fw-bold">{{ $modulo }}</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#FormularioAnadirDetalle"><i class="bi bi-person-plus-fill"></i>Agregar producto</button>
    </div>
</nav>

<div class="modal fade" id="FormularioAnadirDetalle" tabindex="-1"
        aria-labelledby="FormularioFormularioAnadirDetalleLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioAnadirDetalleLabel">Añadir Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center fst-italic needs-vblaalidation row formulario"
                        action="{{ route('pedidoRegistrar') }}" method="POST">
                        @csrf

                        <!-- NIVEL 1 -->
                        <div class="col-lg-12">
                            <!--- Producto --->
                            <div class="d-flex">
                                <label class="form-label ">Producto</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <select class="form-select IngresoDatos form-control" aria-label="Default select example"
                                    name="IdProducto" id="IdProducto" value="{{ old('PedidoId') }}">
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->Nombre }}, Precio: {{ $producto->PrecioDetal }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <small class="text-danger">{{ $errors->first('Nombres') }}</small>
                        </div>
                        <div class="col-lg-12">
                            <!-- Cantidad -->
                            <div class="d-flex">
                                <label class="form-label">Apellido</label>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                <input type="text" class="form-control" placeholder="Cantidad de productos"
                                    name="Cantidad" id="Cantidad" value="{{ old('Cantidad') }}">
                            </div>
                            <small class="text-danger">{{ $errors->first('Apellidos') }}</small>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input class="btn botonConfirmar" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>
    </div>

<table id="TableClientes" class="table table-striped text-center display" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Pedido</th>
        </tr>
    </thead>
    <tbody>
        @forelse($detalles as $detalle)
            <tr>
                <td>{{ $detalle->id }}</td>
                <td>{{ $detalle->IdProducto }}</td>
                <td>{{ $detalle->Cantidad }}</td>
                <td>{{ $detalle->Precio }}</td>
                <td>{{ $detalle->IdPedido }}</td>
                <td>
                    <form action="pedidosdetallesIndex,{{$detalle}}" method="POST">
                        <button type="submit" class="btn btn-success boton-listado"><i
                            class="bi bi-eye-fill"></i></button>
                    </form>    
                </td>
            </tr>

            

           

        @empty
            <tr>Sin clientes</tr>
        @endforelse
    </tbody>
</table>

@endsection()
