@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')

<nav class="navbar" >
    <div class="container p-0">
        <form class="d-flex" action="{{ url('/'.$modulo)}}" method="post">
            <h1 class="fw-bold">{{$modulo}}</h1>
        </form>
        <form class="d-flex">
            <div class="btn-group btn-group" role="group">
                <a type="button" class="btn btn-primary " href="{{ route('pedidoRegistrar') }}">
                    <i class="material-icons align-middle">add</i>
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>


<table id="myTable" class="table text-center align-middle">
    <thead>
        <tr>
            <th scope="col">Documento cliente</th>
            <th scope="col">Nombre cliente</th>
            <th scope="col">Código producto</th>
            <th scope="col">Cantidad Productos</th>
            <th scope="col">Valor pedido</th>
            <th scope="col">Vendedor</th>
            <th scope="col">Operaciones</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1234566</th>
            <td>Jaimito Herrera</td>
            <td>1</td>
            <td>12</td>
            <td>50.000</td>
            <td>12345</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('pedidoEditar') }}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">close</i>
                    </a>
                    <a type="button" class="btn btn-success" href="{{ route('pedidoIndex') }}">
                        <i class="material-icons align-middle">check</i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="material-icons align-middle">remove_red_eye</i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">1234588</th>
            <td>Dario Maya</td>
            <td>2</td>
            <td>12</td>
            <td>50.000</td>
            <td>12345</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('pedidoEditar') }}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">close</i>
                    </a>
                    <a type="button" class="btn btn-success" href="{{ route('pedidoIndex') }}">
                        <i class="material-icons align-middle">check</i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="material-icons align-middle">remove_red_eye</i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">1234577</th>
            <td>Emilio Zapata</td>
            <td>3</td>
            <td>12</td>
            <td>50.000</td>
            <td>12345</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('pedidoEditar') }}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">close</i>
                    </a>
                    <a type="button" class="btn btn-success" href="{{ route('pedidoIndex') }}">
                        <i class="material-icons align-middle">check</i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="material-icons align-middle">remove_red_eye</i>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection
