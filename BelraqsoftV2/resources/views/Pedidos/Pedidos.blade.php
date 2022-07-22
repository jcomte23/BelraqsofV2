@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')


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



@endsection()
