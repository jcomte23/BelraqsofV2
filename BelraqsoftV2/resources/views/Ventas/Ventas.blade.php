@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <h1 class="fw-bold">{{ $modulo }}</h1>

    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

    <table id="TableVentas" class="table text-center table-striped align-middle display" style="width:100%">
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
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ventas as $venta)
                <tr>
                    <td>{{ $venta->Codigo }}</td>
                    <td>{{ $venta->unionCliente->Nombres }} {{ $venta->unionCliente->Apellidos }}</td>
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
                        <form class="form-check form-switch form-switch-md" action="{{ route('ventaEstado', $venta) }}" method="post">
                            @csrf
                            @if ($venta->Estado == 1)
                                <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckChecked" checked>
                            @else
                            <input type="checkbox" onChange="this.form.submit()" class="form-check-input" id="flexSwitchCheckDefault">
                            @endif
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="DetallesVentas{{ $venta->id }}" tabindex="-1"
                    aria-labelledby="DetallesVentasLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DetallesVentasLabel">Detalles de la venta:  
                                    {{ $venta->Codigo }}
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h5> <strong>Codigo: </strong> {{ $venta->Codigo }}</h5>
                                <h5> <strong>Fecha: </strong> {{ $venta->Fecha }}</h5>
                                <h5> <strong>Vendedor: </strong> {{ $venta->unionCliente->Nombres }} {{ $venta->unionCliente->Apellidos }}</h5>
                                <h5> <strong>Cliente: </strong> {{ $venta->unionCliente->Nombres }} {{ $venta->unionCliente->Apellidos }}</h5>
                                <h5> <strong>Cantidad productos: </strong> {{ $venta->CantidadProductos }}</h5>
                                <h5> <strong>Valor: $</strong> {{ $venta->Total }}</h5>
                                @if ($venta->Estado == 1)
                                    <h5 style="color: green"><strong style="color: gray">Estado: </strong>Activa</h5>
                                @else
                                    <h5 style="color: red"><strong style="color: gray">Estado: </strong>InActiva</h5>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
