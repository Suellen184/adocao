{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Criar')

@section('content_header')

@section('content')

<style>

</style>
 <h4 class="text-center font-weight-bold mb-5">Criar Depoimento</h4>
 <form action="{{route('admin.depoimento.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
    @csrf


    <input type="file" name="imagem" id="imagem" value="{{ old('imagem') }}">
    <div class="row">
        <div class="form-group col-sm-2">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="{{ old('codigo') }}" >
        </div>
    </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>

            <div class="form-group col-sm-4">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
            </div>

            <div class="form-group col-sm-3">
                <label for="status">Status</label>
                <select class="form-control " id="status">
                <option value="1"{{ (old('status') == '1' ? 'selected' : '') }}>1</option>
                <option value="0"{{ (old('status') == '0' ? 'selected' : '') }}>0</option>
                </select>
            </div>
        </div>  
            <div class="form-group">
                <label for="">Mensagem</label>
                <textarea class="form-control col-sm-11" name="mensagem" value="{{ old('mensagem') }} id="mensagem" rows="3"></textarea>
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
