@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    <h1 class="fw-bold">{{ $modulo }}</h1>
    <nav class="navbar">
        <div class="container p-0">
            <form class="d-flex" action="{{ url('/' . $modulo) }}" method="post">
                <input class="form-control me-2 " placeholder="Buscar">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
            <form class="d-flex">
                <div class="btn-group btn-group" role="group">
                    <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#FormularioPedido">
                        <i class="material-icons align-middle">add</i>
                        <span></span>
                    </a>
                </div>
            </form>
        </div>
    </nav>
    <table class="table text-center align-middle">
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
                        <a type="button" class="btn btn-warning" href="{{ url('/' . $modulo . '/Editar') }}">
                            <i class="material-icons align-middle">edit</i>
                        </a>
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
                        </a>
                        {{-- <a type="button" class="btn btn-success" href="{{ url('/'.$modulo)}}"> --}}
                        {{-- <i class="material-icons align-middle">check</i> --}}
                        {{-- </a> --}}
                        {{-- <a type="button" class="btn btn-info" href=""> --}}
                        {{-- <i class="material-icons align-middle">remove_red_eye</i> --}}
                        {{-- </a> --}}
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
                        <a type="button" class="btn btn-warning" href="{{ url('/' . $modulo . '/Editar') }}">
                            <i class="material-icons align-middle">edit</i>
                        </a>
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
                        </a>
                        {{-- <a type="button" class="btn btn-success" href="{{ url('/'.$modulo)}}"> --}}
                        {{-- <i class="material-icons align-middle">check</i> --}}
                        {{-- </a> --}}
                        {{-- <a type="button" class="btn btn-info" href=""> --}}
                        {{-- <i class="material-icons align-middle">remove_red_eye</i> --}}
                        {{-- </a> --}}
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
                        <a type="button" class="btn btn-warning" href="{{ url('/' . $modulo . '/Editar') }}">
                            <i class="material-icons align-middle">edit</i>
                        </a>
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
                        </a>
                        {{-- <a type="button" class="btn btn-success" href="{{ url('/'.$modulo)}}"> --}}
                        {{-- <i class="material-icons align-middle">check</i> --}}
                        {{-- </a> --}}
                        {{-- <a type="button" class="btn btn-info" href=""> --}}
                        {{-- <i class="material-icons align-middle">remove_red_eye</i> --}}
                        {{-- </a> --}}
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal fade" id="FormularioPedido" tabindex="-1" aria-labelledby="FormularioPedidoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form action="{{ url('/' . $modulo) }}" method="get">
                <div class="modal-header">
                    <h5 class="modal-title" id="FormularioPedidoLabel">Registro de {{ $modulo }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            {{-- <div class="mt-5 w-50 " style="margin-left: 25%;"> --}}
                            <H2 class="d-flex justify-content-center">Pedido</H2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Cliente" name="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="text" class="form-control" placeholder="Producto" name="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="number" class="form-control" placeholder="Cantidad productos" name="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="material-icons align-middle"></i></span>
                                <input type="number" class="form-control" placeholder="Valor pedido" name="" disabled>
                            </div>
                        </div>
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
    </div>
@endsection
