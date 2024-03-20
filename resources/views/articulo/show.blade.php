@extends('adminlte::page')

@section('title', 'Suino App')

@section('content_header')
    <h1>Resultado da Remessa {{$articulo->id}}</h1>
@stop

@section('content')
<a href="/articulos" class="btn btn-primary mb-3">Voltar</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="bg-primary text-white">
        <tr>
            <th scope="col">Animal</th>
            <th scope="col">Rendimento da Carcaça(%)</th>
            <th scope="col">Carcaça Total(kg)</th>
            <th scope="col">Perda de Carcaça no Resfriamento (%) </th>
            <th scope="col">Rendimento da Carne na Carcaça Resfriada (%) </th>
            <th scope="col">Quantidade da Carne Resfriada(kg)</th>
            <th scope="col">Relação Carne Gordura(kg)</th>
            <th scope="col">Tipificação</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>{{($articulo->peso_vivo_01/ $articulo->peso_quente_01)/100}}</td>
            <td>{{$articulo->peso_quente_01 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_01)+(0.094*$articulo->musculo_01)-(0.026*$articulo->peso_48_01)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_01)+(0.059*$articulo->musculo_01)-(0.525*$articulo->peso_quente_01)/100}}</td>
            <td>{{$articulo->long_dorsi_01/$articulo->musculo_01}}</td>
            <td></td>
            <td>@if($articulo->ph2_01 < 6 && $articulo->ph2_01 > 5.8 && $articulo->cor_01 > 43 && $articulo->cor_01 < 49)
                    <p class="btn btn-success" >Premium</p>
                    @elseif($articulo->ph2_01 > 6 && $articulo->cor_01 < 42)
                        <p class="btn btn-danger" >DFD</p>
                    @else
                    <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>02</td>
            <td>{{$articulo->peso_vivo_02/$articulo->peso_quente_02}}</td>
            <td>{{$articulo->peso_quente_02 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_02)+(0.094*$articulo->musculo_02)-(0.026*$articulo->peso_48_02)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_02)+(0.059*$articulo->musculo_02)-(0.525*$articulo->peso_quente_02)}}</td>
            <td>{{$articulo->long_dorsi_02/$articulo->musculo_02}}</td>
            <td></td>
            <td>@if($articulo->ph1_02 > 5.8 && $articulo->ph2_02 < 6 && $articulo->cor_02 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>03</td>
            <td>{{$articulo->peso_vivo_03/ $articulo->peso_quente_03}}</td>
            <td>{{$articulo->peso_quente_03 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_03)+(0.094*$articulo->musculo_03)-(0.026*$articulo->peso_48_03)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_03)+(0.059*$articulo->musculo_03)-(0.525*$articulo->peso_quente_03)}}</td>
            <td>{{$articulo->long_dorsi_03/$articulo->musculo_03}}</td>
            <td></td>
            <td>@if($articulo->ph1_03 > 5.7 && $articulo->ph2_03 > 6 && $articulo->cor_03 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>04</td>
            <td>{{$articulo->peso_vivo_04/ $articulo->peso_quente_04}}</td>
            <td>{{$articulo->peso_quente_04 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_04)+(0.094*$articulo->musculo_04)-(0.026*$articulo->peso_48_04)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_04)+(0.059*$articulo->musculo_04)-(0.525*$articulo->peso_quente_04)}}</td>
            <td>{{$articulo->long_dorsi_04/$articulo->musculo_04}}</td>
            <td></td>
            <td>@if($articulo->ph1_04 > 5.7 && $articulo->ph2_04 > 6 && $articulo->cor_04 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>05</td>
            <td>{{$articulo->peso_vivo_05/ $articulo->peso_quente_05}}</td>
            <td>{{$articulo->peso_quente_05 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_05)+(0.094*$articulo->musculo_05)-(0.026*$articulo->peso_48_05)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_05)+(0.059*$articulo->musculo_05)-(0.525*$articulo->peso_quente_05)}}</td>
            <td>{{$articulo->long_dorsi_05/$articulo->musculo_05}}</td>
            <td></td>
            <td>@if($articulo->ph1_05 > 5.7 && $articulo->ph2_05 > 6 && $articulo->cor_05 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>06</td>
            <td>{{$articulo->peso_vivo_06/ $articulo->peso_quente_06}}</td>
            <td>{{$articulo->peso_quente_06 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_06)+(0.094*$articulo->musculo_06)-(0.026*$articulo->peso_48_06)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_06)+(0.059*$articulo->musculo_06)-(0.525*$articulo->peso_quente_06)}}</td>
            <td>{{$articulo->long_dorsi_06/$articulo->musculo_06}}</td>
            <td></td>
            <td>@if($articulo->ph1_06 > 5.7 && $articulo->ph2_06 > 6 && $articulo->cor_06 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>07</td>
            <td>{{$articulo->peso_vivo_07/ $articulo->peso_quente_07}}</td>
            <td>{{$articulo->peso_quente_07 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_07)+(0.094*$articulo->musculo_07)-(0.026*$articulo->peso_48_07)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_07)+(0.059*$articulo->musculo_07)-(0.525*$articulo->peso_quente_07)}}</td>
            <td>{{$articulo->long_dorsi_07/$articulo->musculo_07}}</td>
            <td></td>
            <td>@if($articulo->ph1_07 > 5.7 && $articulo->ph2_07 > 6 && $articulo->cor_07 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>08</td>
            <td>{{$articulo->peso_vivo_08/ $articulo->peso_quente_08}}</td>
            <td>{{$articulo->peso_quente_08 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_08)+(0.094*$articulo->musculo_08)-(0.026*$articulo->peso_48_08)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_08)+(0.059*$articulo->musculo_08)-(0.525*$articulo->peso_quente_08)}}</td>
            <td>{{$articulo->long_dorsi_01/$articulo->musculo_08}}</td>
            <td></td>
            <td>@if($articulo->ph1_08 > 5.7 && $articulo->ph2_08 > 6 && $articulo->cor_08 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>09</td>
            <td>{{$articulo->peso_vivo_09/ $articulo->peso_quente_09}}</td>
            <td>{{$articulo->peso_quente_09 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_09)+(0.094*$articulo->musculo_09)-(0.026*$articulo->peso_48_09)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_09)+(0.059*$articulo->musculo_09)-(0.525*$articulo->peso_quente_09)}}</td>
            <td>{{$articulo->long_dorsi_09/$articulo->musculo_09}}</td>
            <td></td>
            <td>@if($articulo->ph1_09 > 5.7 && $articulo->ph2_09 > 6 && $articulo->cor_09 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>10</td>
            <td>{{$articulo->peso_vivo_10/ $articulo->peso_quente_10}}</td>
            <td>{{$articulo->peso_quente_10 * 2.05}}</td>
            <td>{{65.92-(0.685 * $articulo->toucinho_10)+(0.094*$articulo->musculo_10)-(0.026*$articulo->peso_48_10)/100}}</td>
            <td>{{7.38-(0.48 * $articulo->toucinho_10)+(0.059*$articulo->musculo_10)-(0.525*$articulo->peso_quente_10)}}</td>
            <td>{{$articulo->long_dorsi_10/$articulo->musculo_10}}</td>
            <td></td>
            <td>@if($articulo->ph1_10 > 5.7 && $articulo->ph2_10 > 6 && $articulo->cor_10 < 49 )
                    <p class="btn btn-success" >Premium</p>
                    @else
                        <p class="btn btn-danger" >PSE</p>
                    @endif
            </td>
        </tr>
    </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')


@stop
