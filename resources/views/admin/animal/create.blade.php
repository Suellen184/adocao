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

<form action="{{route('admin.animal.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
    @csrf

  <!--  <div style="border:  2px dashed rgb(151, 151, 151);border-radius: 8px; text-align: center; width: 200px; height: 200px;">    <label name="imagem" for="avatar_loader-c15e-36af-a130" style="font-size: 12px; text-align: center; font-weight: 700; color: black; display: inline-block; font-family: sans-serif; cursor: pointer; line-height: 300px;">Insira uma imagem</label></div>
  -->
  <input type="file" name="imagem" id="imagem">
    <div class="row">
    <div class="form-group col-sm-8">
      <label for="nome">Nome</label>
      <input type="text" class="form-control " id="nome" name="nome" aria-describediby="Nome" placeholder="Nome do animal">
    </div>

    <div class="form-group col-sm-4">
        <label for="cor">Cor</label>
        <input type="text" class="form-control" id="cor" name="cor" placeholder="Cor do animal">
    </div>
</div>    
<div class="row">
    <div class="form-group  col-sm-4">
        <label for="raca">Raça</label>
        <input type="text" class="form-control" id="raca" name="raca" placeholder="Raça do animal">
    </div>

    <div class="form-group col-sm-4">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="Data de Nascimento">
    </div>

    <div class="form-group col-sm-4">
      <label for="status">Tamanho</label>
      <select class="form-control"  name="tamanho"  id="tamanho">
        <option value="pequeno">Pequeno</option>
        <option value="medio">Médio</option>
        <option value="grande">Grande</option>
      </select>
  </div>
</div>
<div class="row">
    <div class="form-group col-sm-4">
        <label for="tipo">Tipo</label>
        <select class="form-control" name="tipo" id="tipo">
          <option value="cachorro">Cachorro</option>
          <option value="gato">Gato</option>
        </select>
    </div>

    <div class="form-group col-sm-4">
        <label for="sexo">Sexo</label>
        <select class="form-control"  name="sexo" id="sexo">
          <option value="femea">Fêmea</option>
          <option value="macho">Macho</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label for="status">Status</label>
        <select class="form-control"  name="status"  id="status">
          <option value="inativo">Inativo</option>
          <option value="ativo">Ativo</option>
        </select>
    </div>

  </div>

    <div class="form-group col-sm-12">
    <label for="exampleFormControlTextarea1">Observação Administrador</label>
    <textarea class="form-control " name="observacao" id="exampleFormControlTextarea1" rows="3"></textarea>
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
