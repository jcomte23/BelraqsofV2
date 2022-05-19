@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{$modulo}}</h1>
<nav class="navbar">
    <div class="container p-0">
        <form class="d-flex" action="{{ url('/'.$modulo)}}" method="get">
            <input class="form-control me-2 " placeholder="Buscar">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <form class="d-flex">
            <div class="btn-group btn-group" role="group">
                <a type="button" class="btn btn-primary " href="{{ url('/'.$modulo.'/Registrar')}}">
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
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Dirección</th>
            <th scope="col">Telefono</th>
            <th scope="col">Operaciones</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Carmen</td>
            <td>Lopes</td>
            <td>1002212</td>
            <td>Carmen@gmail.com</td>
            <td>02/01/2002</td>
            <td>Crr 32 a</td>
            <td>302333432</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ url('/'.$modulo.'/Editar')}}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">tune</i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>Juan</td>
            <td>Gaviria</td>
            <td>1002212</td>
            <td>Juan@gmail.com</td>
            <td>02/03/2000</td>
            <td>Crr 32 a</td>
            <td>322003432</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ url('/'.$modulo.'/Editar')}}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">tune</i>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>Pepe</td>
            <td>Ruiz</td>
            <td>1102412</td>
            <td>Pepito@gmail.com</td>
            <td>05/09/2002</td>
            <td>Crr 42 b</td>
            <td>302329432</td>
            <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
                    <a type="button" class="btn btn-warning" href="{{ url('/'.$modulo.'/Editar')}}">
                        <i class="material-icons align-middle">edit</i>
                    </a>
                    <a type="button" class="btn btn-danger" href="">
                        <i class="material-icons align-middle">tune</i>
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection