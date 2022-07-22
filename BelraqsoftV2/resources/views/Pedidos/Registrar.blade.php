@extends('Layouts.plantilla')

@section('title', $modulo)

@section('content')
    {{-- <div class="row">
        <div class="col">
            <h3 class="text-center">Crear Producto </h3>
            <a href="/producto/listar"> Listar</a>
        </div>
    </div> --}}
    {{-- <form action="/producto/guardar" method="post"> --}}
    @csrf
    <div class="card-head row">
        <div class="col-12">
            <h4 class="text-center">Nuevo pedido</h4>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-3">
                <label for="txtCliente">Cliente</label>
                <select name="txtCliente" id="txtCliente" class="form-control">
                    <option value="AL">Seleccione</option>
                    @foreach ($Cliente as $valueCliente)
                        <option value="{{ $valueCliente->id }}">{{ $valueCliente->Nombres }} {{ $valueCliente->Apellidos }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-3">
                <label for="dllProducto">Producto</label>
                <select name="dllProducto" id="dllProducto" class="form-control"
                    onchange="cambioProductoRegistrarPedido();">
                    <option value="">Seleccione</option>
                    @foreach ($Existencias as $valueExistencia)
                        <option value="{{ $valueExistencia->id }}">{{ $valueExistencia->Nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-3">
                <label for="txtMarca">Marca</label>
                <input type="text" class="form-control" name="txtMarca" id="txtMarca" readonly>
            </div>
            <div class="form-group col-3">
                <label for="txtPrecio">Precio</label>
                <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" readonly>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-3">
                <label for="txtCantidad">Cantidad</label>
                <input type="number" class="form-control" name="txtCantidad" id="txtCantidad" min="0"
                    onchange="calcularPrecio();">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4" style="margin-top: 3%;">
            <button type="submit" class="btn btn-success btn-block" onclick="agregarProductosTabla();">Agregar</button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <table id="TablePedidos" class="table table-striped text-center display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
            </table>
            <tbody>

            </tbody>
        </div>
    </div>
    {{-- </form> --}}

    <script>
        function cambioProductoRegistrarPedido() {
            var producto = $("#dllProducto").val();

            var existencias = {!! json_encode($Existencias) !!};

            existencias.forEach(element => {
                if (element.id == producto) {
                    $("#txtMarca").val(element.Marca);
                    $("#txtPrecio").val(element.PrecioDetal);
                    $("#txtCantidad").val(1);
                }
            });
        }

        function agregarProductosTabla() {
            var agregarCliente = $("#txtCliente").val();
            var agregarProducto = $("#dllProducto").val();
            var agregarMarca = $("#txtMarca").val();
            var agregarMarca = $("#txtPrecio").val();
            var agregarCantidad = $("#txtCantidad").val();

            if (agregarCliente == null || agregarCliente == "" || agregarCliente == " " || agregarCliente == undefined) {
                alert("El cliente no puede estar vacio.");
                return;
            };

            if (agregarProducto == null || agregarProducto == "" || agregarProducto == " " || agregarProducto ==
                undefined) {
                alert("El producto no puede estar vacio.")
                return;
            };

            if (agregarCantidad == null || agregarCantidad == "" || agregarCantidad == " " || agregarCantidad ==
                undefined || agregarCantidad == 0) {
                alert("La cantidad no puede estar vacia.")
                return;
            }
        }

        function calcularPrecio() {
            var cantidad = parseInt($("#txtCantidad").val());

            var producto = $("#dllProducto").val();

            var existencias = {!! json_encode($Existencias) !!};

            existencias.forEach(element => {
                if (element.id == producto) {
                    $("#txtPrecio").val(cantidad * element.PrecioDetal);
                }
            });
        }

        $(document).ready(function() {
            $('#TablePedidos').DataTable({
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ Registros por página",
                    "zeroRecords": "No se encontró ningún resultado",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    'search': 'Buscar:',
                    'paginate': {
                        'next': 'Siguiente',
                        'previous': 'Anterior'
                    }
                },
                "order": [
                    [0, 'desc'],
                    [0, 'asc']
                ]
            });
        });
    </script>
@endsection
