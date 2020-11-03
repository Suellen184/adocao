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
    @foreach($blogs as $blog)

    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{Storage::url($blog->imagem)}}" alt="Imagem de capa do card">
        <div class="card-body">
        <h5 class="card-title">{{$blog->titulo}}</h5>
        <p class="card-text">{{$blog->mensagem}}</p>
        <a href="{{route('admin.blog.show',['blog'=>$blog->id])}}">Ver tudo</a>
<form action="{{route('admin.blog.destroy',['blog'=>$blog->id])}}" method="post" style="margin-right: 5px;">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i>
    Excluir
</button>
</form>
        </div>
    </div>
    @endforeach
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop