@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<center>
    <h1>registro de {{$modulo}}</h1>
</center>
<form class="text-center fst-italic needs-validation row formulario" method="get">
    <!-- NIVEL 1 -->
    <div class="col-lg-6">
        <label class="form-label">Nombre(s):</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtNombre" placeholder="Ejemplo:Maria Camila" required>
    </div>
    <div class="col-lg-6">
        <label class="form-label">Apellidos(s):</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtApellido" placeholder="Ejemplo: Ortiz" required>
    </div>

    <!-- NIVEL 2 -->
    <!---->
    <div class="col-lg-3">
        <label class="form-label">Tipo:</label><br>
        <select class="form-select IngresoDatos form-control" aria-label="Default select example" name="txtTipo_Doc" required>
            <option value="">Seleccione...</option>
        </select>
    </div>
    <!---->
    <div class="col-lg-3">
        <label class="label"># Documento:</label><br>
        <input class="IngresoDatos form-control" type="number" name="txtDocumento" placeholder="#Documento sin punto decimal" required>
    </div>

    <!---->
    <div class="col-lg-3">
        <label class="label">Rol:</label><br>
        <select class="form-select IngresoDatos form-control" aria-label="Default select example" name="txtTipo_rol" required>
            <option value="">Seleccione...</option>
        </select>
    </div>
    <!---->
    <div class="col-lg-3">
        <label class="form-label">Estado:</label><br>
        <!-- <input class="IngresoDatos form-control" type="text" name="txtEstado" value="Activo" required> -->
        <select class="form-select IngresoDatos form-control" aria-label="Default select example" name="txtEstado" required>
            <option>Activo</option>
            <option>Inactivo</option>
        </select>
    </div>

    <!-- NIVEL 3 -->
    <!---->
    <div class="col-lg-3">
        <label class="form-label">Fecha Exp:</label><br>
        <input class="IngresoDatos form-control" type="date" name="txtFechaExpedicionDocumento" required>
    </div>

    <!---->
    <div class="col-lg-6">
        <label class="form-label">E-mail</label><br>
        <input class="IngresoDatos form-control" type="email" name="txtCorreo" placeholder="Ejemplo: Mariaortiz2022@gmai.com" required>
    </div>

    <!---->
    <div class="col-lg-3">
        <label class="form-label">Contraseña:</label><br>
        <input class="IngresoDatos form-control" type="password" name="txtContraseña" placeholder="Contraseña Alfanumerica">
    </div>

    <!-- NIVEL 4 -->
    <!---->
    <div class="col-lg-7">
        <label class="form-label">Direccion:</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtDireccion" required>
    </div>

    <!---->
    <div class="col-lg-5">
        <label class="form-label">Ciudad/Municipio:</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtCiudad" required>
    </div>

    <!-- NIVEL 5 -->
    <!---->
    <div class="col-lg-4">

    </div>
    <div class="col-lg-4">
        <label class="form-label">Telefono(s):</label><br>
        <input class="IngresoDatos form-control" type="text" name="txtTelefono" placeholder="fijo o movil" required>
    </div>
    <div class="col-lg-4">
    </div>

    <div>
        <br>
        <input class="btn btn-success confirmar_o_cancelar" type="submit" value="Guardar">
        <a class="btn btn-danger confirmar_o_cancelar" href="{{ url('/'.$modulo)}}" role="button">Cancelar</a>
    </div>
</form>
@endsection