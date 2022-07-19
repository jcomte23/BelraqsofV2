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
        <form action="{{ route('pedidoRegistrar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary" 
            ><i class="bi bi-person-plus-fill"></i> Nuevo</button>
        </form>
        
    </div>
</nav>

@if (session('RegistroGuardado'))
        <script>
            registroExitosoCompleto("Pedido registrado");
        </script>
    @endif

    @if (session('RegistroActualizado'))
        <script>
            registroActualizoCompleto("Pedido actualizado correctamente");
        </script>
    @endif

    @if (session('RegistroEliminado'))
        <script>
            registroEliminadoCompleto("Pedido Cancelado");
        </script>
    @endif


    @if (session('EstadoActualizado'))
        <script>
            cambioEstado("Estado Actualizado");
        </script>
    @endif

<table id="TablePedidos" class="table table-striped text-center display" style="width:100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>
            <th scope="col">Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->created_at->format('Y-m-d') }}</td>
                <td>{{ $pedido->Total }}</td>
                <td>
                    <form action="{{ route('pedidodetalle') }}" method="post">
                        @csrf
                        <input type="hidden" name="pedido" value="{{$pedido->id}}">
                        <button type="submit" class="btn btn-success boton-listado"><i
                            class="bi bi-eye-fill"></i></button>
                    </form>    
                </td>
            </tr>
        @empty
            <tr>Sin Pedidos</tr>
        @endforelse
    </tbody>
</table>

@endsection()
