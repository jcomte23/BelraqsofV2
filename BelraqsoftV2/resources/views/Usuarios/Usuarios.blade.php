@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<h1 class="fw-bold">{{$modulo}}</h1>
<nav class="navbar navbar-light">
    <div class="container-fluid buscador" style="padding-right: 0px;">
        <form class="d-flex" method="get" action="{{ url('/'.$modulo)}}">
            <input class="form-control me-2" type="search" placeholder="Buscar" name="datoBuscado" aria-label="Search">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </form>
        <form class="d-flex">
            <a class="btn btn-primary" href="{{ url('/'.$modulo.'/Registrar')}}" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg> Nuevo</a>
        </form>
    </div>
</nav>
<h6>Usuarios registrados: 1</h6>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Rol</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">Apellidos(s)</th>
            <th scope="col">Tipo Doc</th>
            <th scope="col">#Documento</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono(s)</th>
            <th scope="col">Estado</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>Rol</td>
                <td>NombreUsuario</td>
                <td>ApellidosUsuario</td>
                <td>TipoDocumento</td>
                <td>documento</td>
                <td>CorreoUsuario</td>
                <td>DireccionUsuario</td>
                <td>TelfUsuario</td>
                <td>Estado</td>
                <td>
                    <div class="row">
                        <div class="col-lg-6 botones-operaciones">
                            <form method="get" action="{{ url('/'.$modulo)}}">
                                <button class="btn btn-danger" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg></button>
                            </form>
                        </div>
                        <div class="col-lg-6 botones-operaciones">
                            <form method="get" action="{{ url('/'.$modulo.'/Editar')}}">
                                <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
    </tbody>
</table>
@endsection