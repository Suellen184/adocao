{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Adicionando Animal')

@section('content_header')
    <h1>Adicionando Animal</h1>
@stop

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<form action="{{route('admin.animal.store')}}" method="post" autocomplete="off">
    @csrf
    
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control col-sm-6" id="nome" name="nome" aria-describedby="Nome" placeholder="Nome do animal">
    </div>

    <div class="form-group">
        <label for="cor">Cor</label>
        <input type="text" class="form-control col-sm-4" id="cor" name="cor" placeholder="Cor do animal">
    </div>

    <div class="form-group">
        <label for="raca">Raça</label>
        <input type="text" class="form-control col-sm-4" id="raca" name="raca" placeholder="Raça do animal">
    </div>


    <div class="form-group">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" class="form-control col-sm-4" id="nascimento" name="nascimento" placeholder="Data de Nascimento">
    </div>

    <div class="form-group">
      <label for="status">Tamanho</label>
      <select class="form-control col-sm-2"  name="tamanho"  id="tamanho">
        <option value="pequeno">Pequeno</option>
        <option value="medio">Médio</option>
        <option value="grande">Grande</option>
      </select>
  </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <select class="form-control col-sm-2" name="tipo" id="tipo">
          <option value="cachorro">Cachorro</option>
          <option value="gato">Gato</option>
        </select>
    </div>

    <div class="form-group">
        <label for="sexo">Sexo</label>
        <select class="form-control col-sm-2"  name="sexo" id="sexo">
          <option value="femea">Fêmea</option>
          <option value="macho">Macho</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control col-sm-2"  name="status"  id="status">
          <option value="inativo">Inativo</option>
          <option value="ativo">Ativo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
