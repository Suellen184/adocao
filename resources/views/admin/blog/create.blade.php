{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Criar')

@section('content_header')
@section('content')

<h4 class="text-center font-weight-bold mb-5">Criar Artigo</h4>

<form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
@csrf


    <input type="file" name="imagem" id="imagem"  value="">
        <div class="row">

            <div class="form-group col-sm-4">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>

            <div class="form-group col-sm-3">
                <label for="status">Status</label>
                <select class="form-control " id="status">
                <option>1</option>
                <option>2</option>
                </select>
            </div>
        </div> 

            <div class="form-group">
                <label for="">Texto</label>
                <textarea class="form-control col-sm-11" name="mensagem" id="mensagem" rows="3"></textarea>
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