@extends('adminlte::page')

@section('title', 'Suino App')

@section('content_header')
    <h1>Editar Remessa</h1>
@stop

@section('content')
   <form action="/articulos{{$articulo->id}}" method="POST">
   @csrf
   @method('PUT')
       <div class="mb-3">
           <label for="" class="form-label">Nome Fantasia</label>
           <input id="nova_fan" name="res_tec" type="text" class="form-control" tabindex="1">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">Razão Social</label>
           <input id="razao" name="razao" type="text" class="form-control" tabindex="1">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">CNPJ</label>
           <input id="cnpj" name="cnpj" type="number" class="form-control" tabindex="2">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">CEP</label>
           <input id="cep" name="cep" type="number" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">Endereço</label>
           <input id="endereco" name="endereco" type="text" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">Inscrição Estadual</label>
           <input id="ins_esta" name="ins_esta" type="number" step="any" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">Inscrição Municipal</label>
           <input id="ins_muni" name="ins_muni" type="number" step="any" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">E-mail</label>
           <input id="email" name="email" type="text" step="any" class="form-control" tabindex="3">
       </div>
       <div class="mb-3">
           <label for="" class="form-label">Telefone</label>
           <input id="telefone" name="telefone" type="number" step="any" value="0.00" class="form-control" tabindex="3">
       </div>

       <div class="mb-3">
           <label for="" class="form-label">Observações</label>
           <input id=obs_empresa" name="obs_empresa" type="text" step="any"  class="form-control" tabindex="3">
       </div>
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
