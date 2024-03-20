@extends('adminlte::page')

@section('title', 'Suino App')

@section('content_header')
   <h1>Nova Empresa</h1>
@stop

@section('content')

<form action="/articulos" method="POST">
  @csrf
   <div class="row">

     <div class="mb-3 mb-3 col-md-4 col-xs-4">
    <label for="nome_fan" class="form-label">Nome Fantasia</label>
    <input id="nome_fan" name="nome_fan" type="text" class="form-control" tabindex="1">
  </div>
    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="razao" class="form-label">Razão Social</label>
        <input id="razao" name="razao" type="text" class="form-control" tabindex="1">
    </div>
  <div class="mb-3 mb-3 col-md-4 col-xs-4">
    <label for="cnpj" class="form-label">CNPJ</label>
    <input id="cnpj" name="cnpj" type="number" class="form-control" tabindex="2">
  </div>
  <div class="mb-3 mb-3 col-md-4 col-xs-4">
    <label for="cep" class="form-label">CEP</label>
    <input id="cep" name="cep" type="number" class="form-control" tabindex="3">
  </div>
    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="endereco" class="form-label">Endereço</label>
        <input id="endereco" name="endereco" type="text" class="form-control" tabindex="3">
    </div>
  <div class="mb-3 mb-3 col-md-4 col-xs-4">
    <label for="ins_esta" class="form-label">Inscrição Estadual</label>
    <input id="ins_esta" name="ins_esta" type="number" step="any" class="form-control" tabindex="3">
  </div>
    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="ins_muni" class="form-label">Inscrição Municipal</label>
        <input id="ins_muni" name="ins_muni" type="number" step="any" class="form-control" tabindex="3">
    </div>
    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="email" class="form-label">E-mail</label>
        <input id="email" name="email" type="text" step="any" class="form-control" tabindex="3">
    </div>
    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="telefone" class="form-label">Telefone</label>
        <input id="telefone" name="telefone" type="number" step="any" class="form-control" tabindex="3">
    </div>

    <div class="mb-3 mb-3 col-md-4 col-xs-4">
        <label for="obs_empresa" class="form-label">Observações</label>
        <input id=obs_empresa" name="obs_empresa" type="text" step="any"  class="form-control" tabindex="3">

    </div>
   </div>

    <a href="/articulos" class="btn btn-secondary mb-5" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary mb-5" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
