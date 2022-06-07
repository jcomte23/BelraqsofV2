@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{$modulo}}</h1>

<table id="myTable" class="table table-hover display">
    <thead>
        <tr>
            <th scope="col">CODG</th>
            <th scope="col">Usuario Vendedor</th>
            <th scope="col">Fecha Venta</th>
            <th scope="col">Cantidad Productos</th>
            <th scope="col">Ganancia</th>
            <th scope="col">Cliente</th>
            <th scope="col">Doc. Cliente</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ventas as $venta)
        <tr>
            <td>{{$venta->Codigo}}</td>
            <td>{{$venta->unionCliente->Nombres}} {{$venta->unionCliente->Apellidos}}</td>
            <td>{{$venta->Fecha}}</td>
            <td>{{$venta->CantidadProductos}}</td>
            <td>${{$venta->Total}}</td>
            <td>{{$venta->unionCliente->Nombres}} {{$venta->unionCliente->Apellidos}}</td>
            <td>{{$venta->unionCliente->Documento}}</td>
            <td>
                <form action="#" method="post" style="display:inline-flex">
                    <button class="btn btn-outline-success boton-listado" type="submit"><i class="bi bi-image"></i></button>

                    <button type="button" class="btn btn-danger boton-listado"><i class="bi bi-trash"></i></button>
                        
                    <div class="form-check form-switch switchEstado">
                        @if ($venta->Estado==1)
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckDefault"
                        checked>
                        @else
                        <input class="form-check-input switchEstado" type="checkbox" id="flexSwitchCheckDefault">
                        @endif
                    </div>
                </form>
            </td>
        </tr>
        @empty
        <tr>Sin ventas</tr>
        @endforelse
    </tbody>
</table>
@endsection