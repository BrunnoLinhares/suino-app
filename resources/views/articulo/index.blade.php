@extends('adminlte::page')

@section('title', ' Suino App')

@section('content_header')
    <h1>Lista de Remessas</h1>
@stop

@section('content')
   <a href="articulos/create" class="btn btn-primary mb-3">Criar</a>

<table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Responsavel Técnico</th>
            <th scope="col">Carrada</th>
            <th scope="col">Granja</th>
            <th scope="col">Data</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{ $articulo->id}}</td>
            <td>{{$articulo->res_tec}}</td>
            <td>{{$articulo->carrada}}</td>
            <td>{{$articulo->granja}}</td>
            <td>{{$articulo->data}}</td>
            <td>
                <form action="{{ route ('articulos.destroy',$articulo->id)}}" method="POST">
                <a href="/articulos/{{ $articulo->id}}/edit" class="btn btn-info">Editar</a>


                <a href="{{ route('articulos.show', $articulo->id)}}" class="btn btn-warning">Resultado</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>

@stop
