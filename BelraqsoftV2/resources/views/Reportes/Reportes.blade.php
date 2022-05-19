@extends('Layouts.plantilla')

@section('title',$modulo)

@section('content')

<div class="row">
    <h1>{{$modulo}}</h1>
    <div class="col-lg-4 main-chart">
        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Clientes</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>10.000</span></li>
                    <li><span>8.000</span></li>
                    <li><span>6.000</span></li>
                    <li><span>4.000</span></li>
                    <li><span>2.000</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
            </div>

        </div>

        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Vendedores</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>10.000</span></li>
                    <li><span>8.000</span></li>
                    <li><span>6.000</span></li>
                    <li><span>4.000</span></li>
                    <li><span>2.000</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-lg-4 main-chart">
        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Cumpleañeros</h3>
            </div>
            <div class="custom-bar-chart">
                <div class="col-md-12 col-sm-4 mb">
                    <div class="grey-panel pn donut-chart">
                        <div class="grey-header">
                            <h5>Cumpleañeros</h5>
                        </div>
                        <canvas id="serverstatus01" height="120" width="200"></canvas>
                        <script>
                            var doughnutData = [{
                                value: 70,
                                color: "#FF6B6B"
                            }, {
                                value: 30,
                                color: "#fdfdfd"
                            }];
                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 goleft">
                                <p>Cumpleañeros<br />ABRIL:</p>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <h2>21</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Compras</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>10.000</span></li>
                    <li><span>8.000</span></li>
                    <li><span>6.000</span></li>
                    <li><span>4.000</span></li>
                    <li><span>2.000</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
            </div>

        </div>

    </div>

    <div class="col-lg-4 main-chart">
        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Ventas</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>10.000</span></li>
                    <li><span>8.000</span></li>
                    <li><span>6.000</span></li>
                    <li><span>4.000</span></li>
                    <li><span>2.000</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
            </div>

        </div>

        <div class="m-4">
            <!-- LUGAR DEL CRUD -->
            <div class="border-head">
                <h3>Existencias</h3>
            </div>
            <div class="custom-bar-chart">
                <ul class="y-axis">
                    <li><span>10.000</span></li>
                    <li><span>8.000</span></li>
                    <li><span>6.000</span></li>
                    <li><span>4.000</span></li>
                    <li><span>2.000</span></li>
                    <li><span>0</span></li>
                </ul>
                <div class="bar">
                    <div class="title">JAN</div>
                    <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                </div>
                <div class="bar ">
                    <div class="title">FEB</div>
                    <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                </div>
                <div class="bar ">
                    <div class="title">MAR</div>
                    <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                </div>
                <div class="bar ">
                    <div class="title">APR</div>
                    <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                </div>
                <div class="bar">
                    <div class="title">MAY</div>
                    <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                </div>
                <div class="bar ">
                    <div class="title">JUN</div>
                    <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                </div>
                <div class="bar">
                    <div class="title">JUL</div>
                    <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
