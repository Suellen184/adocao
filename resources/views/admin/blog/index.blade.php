{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <h1></h1>
@stop

@section('content')


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<div class="container">

    <h4 class="text-center font-weight-bold mb-5">Vizualizar todos os Artigos</h4>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/01/09/11/04/dog-3071334_960_720.jpg" alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">Título do card adocao</h5>
        <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
        <a href="#" class="btn btn-primary">Ver tudo</a>
        <a href="#" class="btn btn-danger">Excluir</a>

        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop