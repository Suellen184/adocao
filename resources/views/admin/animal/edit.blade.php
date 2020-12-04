{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Atualizando Animal')

@section('content_header')
@stop
 
@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<h4 class="text-center font-weight-bold mb-5">Atualizar Animal</h4>
<form action="{{route('admin.animal.edit',['animal'=>$animal->id])}}" method="put" enctype="multipart/form-data" >
    @csrf
    @method('put')
    <img src="{{Storage::url($animal->imagem)}}" alt=""   style="width: 200px; height: 200px;" class=" rounded float-right">
    <input type="file" name="imagem" id="imagem"  value="{{$animal->imagem}}">
    <div class="row">
      <div class="form-group col-sm-8">
      <label for="nome">Nome</label>
      <input type="text"  value="{{$animal->nome}}" class="form-control" id="nome" name="nome" aria-describedby="Nome" placeholder="Nome do solicitacao">
    </div>

    <div class="form-group col-sm-4">
        <label for="cor">Cor</label>
        <input type="text" value="{{$animal->cor}}" class="form-control" id="cor" name="cor" placeholder="Cor do animal">
    </div>

  </div>
    <div class="row">
    <div class="form-group  col-sm-4">
        <label for="raca">Raça</label>
        <input type="text" value="{{$animal->raca}}" class="form-control" id="raca" name="raca" placeholder="Raça do animal">
    </div>


    <div class="form-group col-sm-4">
        <label for="nascimento">Data de Nascimento</label>
        <input type="date" value="{{$animal->data_nascimento}}" class="form-control" id="nascimento" name="nascimento" placeholder="Data de Nascimento">
    </div>

    <div class="form-group col-sm-4">
      <label for="tamanho">Tamanho</label>
      <select class="form-control"  name="tamanho"  id="tamanho">
        <option value=" {{ $animal->tamanho == 'Pequeno'? 'selected' : '' }}">Pequeno</option>
        <option value="{{ $animal->tamanho == 'Médio'? 'selected' : '' }}">Médio</option>
        <option value="{{ $animal->tamanho == 'Grande'? 'selected' : '' }}">Grande</option>
      </select>
  </div>
</div>
<div class="row">

  <div class="form-group col-sm-4">
      <label for="tipo">Tipo</label>
        <select class="form-control" id="tipo" name="tipo">
          <option value="{{$animal->tipo}}">Cachorro</option>
          <option value="{{$animal->tipo}}">Gato</option>
        </select>
    </div>

    <div class="form-group col-sm-4">
        <label for="sexo">Sexo</label>
        <select class="form-control" id="sexo" name="sexo">
          <option value="{{$animal->sexo}}">Fêmea</option>
          <option value="{{$animal->sexo}}">Macho</option>
        </select>
    </div>
    <div class="form-group col-sm-4">
        <label for="status">Status</label>
        <select class="form-control" id="status"  name="status">
          <option value="{{$animal->status}}">Inativo</option>
          <option value="{{$animal->status}}">Disponivel</option>
          <option value="{{$animal->status}}">Adotado</option>

        </select>
    </div>
  </div>

  <div class="form-group col-sm-12">
    <label for="exampleFormControlTextarea1">Observação Administrador</label>
    <textarea class="form-control " name="observacao" id="exampleFormControlTextarea1" rows="3">{{$animal->observacao}}</textarea>
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
