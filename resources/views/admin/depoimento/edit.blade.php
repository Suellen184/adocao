{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
@section('content')
<h4 class="text-center font-weight-bold mb-5">Editar Depoimento</h4>
 
<form action="{{route('admin.depoimento.update',['depoimento'=>$depoimento->id])}}" method="post" >
    @csrf
    @method('put')
    <img src="{{Storage::url($depoimento->imagem)}}" alt=""   style="width: 200px; height: 200px;" class=" rounded float-right"><br>
    <input type="file" name="imagem" id="imagem"  value="{{$depoimento->imagem}}">
    <div class="row">
        <div class="form-group col-sm-2">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{$depoimento->codigo_solicitacao}}">
        </div>
    </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$depoimento->nome}}">
            </div>

            <div class="form-group col-sm-4">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$depoimento->titulo}}">
            </div>

            <div class="form-group col-sm-3">
                <label for="status">Status</label>
                <select class="form-control " id="status">
                <option value="ativo" {{ $depoimento->status == 'ativo'? 'selected ="selected"' : '' }}>ativo</option>
                <option value="inativo" {{ $depoimento->status == 'inativo'? 'selected ="selected"' : '' }}>inativo</option>
                </select>
            </div>
        </div>  
            <div class="form-group">
                <label for="">Mensagem</label>
            <textarea class="form-control col-sm-11" name="mensagem" id="mensagem" rows="3">{{$depoimento->mensagem}}</textarea>
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
