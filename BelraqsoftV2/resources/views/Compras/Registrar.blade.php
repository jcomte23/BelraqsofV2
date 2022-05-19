@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')
<div class="container w-100 fs-5  ">
    <div class="mt-5 w-50 " style="margin-left: 25%;">
        <H2 class="d-flex justify-content-center">Nueva compra</H2>

        <!-- - Transportadora -
                  <div class="d-flex justify-content-center">
                    <label class="form-label ">Transportadora</label>
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
                    <input type="text" class="form-control" placeholder="Transportadora" name="" required>
                  </div> -->

        <!-- Documento cliente -->
        <!-- <div class="d-flex justify-content-center">
                    <label  class="form-label">Cliente</label>
                  </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="date" class="form-control" placeholder="Fecha de la compra" name="">
        </div>

        <!-- Código producto -->
        <!-- <div class="d-flex justify-content-center">
                    <label  class="form-label">Código producto</label>
                  </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="number" class="form-control" placeholder="Candidad del producto" name="">
        </div>

        <!-- Cantidad productos -->
        <!-- <div class="d-flex justify-content-center">
                    <label  class="form-label">Cantidad productos</label>
                  </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="number" class="form-control" placeholder="Valor de compra" name="">
        </div>

        <!-- Valor pedido -->
        <!-- <div class="d-flex justify-content-center">
                    <label  class="form-label">Valor pedido</label>
                  </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="number" class="form-control" placeholder="Numero de recibo" name="" disabled>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="date" class="form-control" placeholder="Fecha de registro" name="" disabled>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="material-icons align-middle"></i></span>
            <input type="number" class="form-control" placeholder="ID del usuario" name="" disabled>
        </div>



        <div class="btn-group btn-group " role="group">
            <a type="submit" class="btn btn-primary " href="">
                <i class="material-icons align-middle">add</i>
                <span></span>
            </a>
        </div>
    </div>
    <br>


    <table class="table text-center align-middle W-100">
        <thead>
            <tr>
                <th scope="col">Fecha de compra</th>
                <th scope="col">Total cantidad de productos</th>
                <th scope="col">Valor de compra</th>
                <th scope="col">Numero recibo</th>
                <th scope="col">Fecha de registro</th>
                <th scope="col">Id del usuario</th>
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
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
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
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
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
                        <a type="button" class="btn btn-danger" href="">
                            <i class="material-icons align-middle">close</i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total</td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <div class="mt-5 btn-group d-flex">
        <a type="submit" href="{{ url('/'.$modulo.'/Registrar')}}" class="btn btn-success confirmar_o_cancelar " style="margin-right: 30%; left: 29%;">Registrar</a>
        <a type="submit" href="{{ url('/'.$modulo)}}" class="btn btn-danger confirmar_o_cancelar " style="margin-left: 30%; right: 29%;">Cancelar</a>
    </div>
</div>

@endsection