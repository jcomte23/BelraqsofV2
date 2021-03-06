@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{$modulo}}</h1>
<nav class="navbar">
    <div class="container p-0">
        <form class="d-flex" action="{{ url('/'.$modulo)}}" method="get">
            <input class="form-control me-2" type="search" placeholder="Buscar" name="datoBuscado" aria-label="Search">
                <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <form class="d-flex">
            <div class="btn-group btn-group" role="group">
                <a type="button" class="btn btn-primary " href="{{ route('compraRegistrar') }}">
                    <span><i class="bi bi-plus-lg"></i></span>
                </a>
            </div>
        </form>
    </div>
</nav>
<table class="table text-center align-middle">
    <thead>
        <tr>
            <th scope="col">Fecha de compra</th>
            <th scope="col">Total cantidad de productos</th>
            <th scope="col">Valor de compra</th>
            <th scope="col">Numero recibo</th>
            <th scope="col">Fecha de registro</th>
            <th scope="col">Id del usuario</th>
            <th scope="col">Operaciones</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">02/02/2008</th>
            <td>7</td>
            <td>60.000</td>
            <td>1232</td>
            <td>01/01/2022</td>
            <td>313</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('compraEditar') }}">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="bi bi-x-circle-fill"></i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">02/02/2008</th>
            <td>7</td>
            <td>60.000</td>
            <td>1232</td>
            <td>01/01/2022</td>
            <td>313</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('compraEditar') }}">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="bi bi-x-circle-fill"></i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">02/02/2008</th>
            <td>7</td>
            <td>60.000</td>
            <td>1232</td>
            <td>01/01/2022</td>
            <td>313</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ route('compraEditar') }}">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="bi bi-x-circle-fill"></i>
                    </a>
                    <a type="button" class="btn btn-info" href="">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection