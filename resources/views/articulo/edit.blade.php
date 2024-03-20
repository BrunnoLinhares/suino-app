@extends('adminlte::page')

@section('title', 'Suino App')

@section('content_header')
    <h1>Editar Artículo</h1>
@stop

@section('content')
   <form action="/articulos/{{$articulo->id}}" method="POST">
   @csrf
   @method('PUT')
            <div>

            <div class="row">
                            <div class="mb-3 col-md-4 col-xs-4">
                                <label for="res_tec" class="form-label">Responsavel Técnico</label>
                                <input id="res_tec" name="res_tec" type="text" class="form-control" tabindex="1" value="{{$articulo->res_tec}}">
                            </div>
                            <div class="mb-3 col-md-4 col-xs-4">
                                <label for="inspetor" class="form-label">Inspetor(a)</label>
                                <input id="inspetor" name="inspetor" type="text" class="form-control" tabindex="2" value="{{$articulo->inspetor}}">
                            </div>
                            <div class="mb-3 col-md-4 col-xs-4">
                                <label for="data" class="form-label">Data</label>
                                <input id="data" name="data" type="date" class="form-control " tabindex="3" value="{{$articulo->data}}">
                            </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4 col-xs-4">
                        <label for="granja" class="form-label">Granja</label>
                        <input id="granja" name="granja" type="text" step="any" class="form-control" tabindex="3" value="{{$articulo->granja}}" >
                    </div>

                    <div class="mb-3 col-md-4 col-xs-4">
                        <label for="logradouro" class="form-label">Logradouro</label>
                        <input id="logradouro" name="logradouro" type="text" step="any" class="form-control" tabindex="3" value="{{$articulo->logradouro}}">
                    </div>
                    <div class="mb-3 col-md-4 col-xs-4">
                        <label for="razao" class="form-label">Razão Social</label>
                        <input id="razao" name="razao" type="text" step="any" class="form-control" tabindex="3" value="{{$articulo->razao}}">
                    </div>
                    <div class="mb-3 col-md-4 col-xs-4">
                        <label for="gta" class="form-label">GTA</label>
                        <input id="gta" name="gta" type="number" step="any" class="form-control" tabindex="3" value="{{$articulo->gta}}">
                    </div>
                <div>
                </div>
                    <div>
                            <a href="/articulos" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>

                    </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
