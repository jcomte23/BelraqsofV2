@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<center>
    <h1>Edicion de {{$modulo}}</h1>
</center>
<form class="text-center fst-italic needs-validation row formulario" method="post">
    <!-- NIVEL 1 -->
    <div class="col-lg-6">
        <!--- Nombre Cliente --->
        <div class="d-flex justify-content-center">
            <label class="form-label ">Nombres</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="text" class="form-control" placeholder="Nombres del cliente" name="" required>
        </div>
    </div>
    <div class="col-lg-6">
        <!-- Apellido -->
        <div class="d-flex justify-content-center">
            <label class="form-label">Apellido</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="text" class="form-control" placeholder="Apellidos de cliente" name="">
        </div>
    </div>

    <!-- NIVEL 2 -->
    <div class="col-lg-3">
        <!-- Documento -->
        <div class="d-flex justify-content-center">
            <label class="form-label">Documento</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="Text" class="form-control" placeholder="Documento" name="">
        </div>
    </div>
    <div class="col-lg-6">
        <div class="d-flex justify-content-center">
            <label class="form-label">Correo</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="text" class="form-control" placeholder="Correo del cliente" name="">
        </div>
    </div>

    <div class="col-lg-3">
        <!-- Fecha de nacimiento -->
        <div class="d-flex justify-content-center">
            <label class="form-label">Fecha de nacimiento </label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="date" class="form-control" placeholder="Fecha de nacimiento del cliente" name="">
        </div>
    </div>

    <!-- NIVEL 3-->
    <div class="col-lg-6">
        <!-- Dirección -->
        <div class="d-flex justify-content-center">
            <label class="form-label">Direccion</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="text" class="form-control" placeholder="Dirección del cliente" name="">
        </div>
    </div>

    <div class="col-lg-3">
        <label class="form-label">Ciudad/Municipio:</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtCiudad" required>
    </div>

    <div class="col-lg-3">
        <div class="d-flex justify-content-center">
            <label class="form-label">Telefono</label>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="number" class="form-control" placeholder="Telefono(s)" name="">
        </div>
    </div>
    <div class="col-lg-3">

    </div>

    <div class="col-lg-6">
        <a type="submit" href="{{ url('/'.$modulo.'/Editar')}}" class="btn btn-success confirmar_o_cancelar">Actualizar</a>
        <a type="submit" href="{{ url('/'.$modulo)}}" class="btn btn-danger confirmar_o_cancelar">Cancelar</a>
    </div>
    <div class="col-lg-3">

    </div>
</form>
@endsection