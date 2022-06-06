@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{$modulo}}</h1>
<nav class="navbar navbar-light">
    <div class="container-fluid buscador">
        <form class="d-flex" action="{{ url('/'.$modulo)}}" method="get">
            <input class="form-control me-2 " type="search" placeholder="Buscar" name="datoBuscado" aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <form class="d-flex">

        </form>
    </div>
</nav>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">CODG</th>
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
            <td>{{$venta->Fecha}}</td>
            <td>{{$venta->CantidadProductos}}</td>
            <td>${{$venta->Total}}</td>
            <td>{{$venta->unionCliente->Nombres}} {{$venta->unionCliente->Apellidos}}</td>
            <td>{{$venta->unionCliente->Documento}}</td>

            <td>
                <div class="row">
                    <div class="col-lg-3 botones-operaciones">
                        <form action="{{ url('/'.$modulo)}}" class="operacionesUsuarios" method="get">
                            <button class="btn btn-outline-success" name="DocumentoParaeliminar" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z" />
                                </svg></button>
                        </form>
                    </div>
                    <div class="col-lg-3 botones-operaciones">
                        <form action="{{ url('/'.$modulo)}}" class="operacionesUsuarios" method="get">
                            <button class="btn btn-outline-danger" name="VentaParaeliminar" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @empty
        <tr>Sin ventas</tr>
        @endforelse
    </tbody>
</table>
{{$ventas->Links('pagination::bootstrap-4')}}
@endsection