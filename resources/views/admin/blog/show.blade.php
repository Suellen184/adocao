@extends('adminlte::page')

@section('title', 'Visualizar')

@section('content_header')
@section('content')

    <h4></h4>



<div class="container">

    <h4 class="text-center font-weight-bold mb-5">Artigo</h4>
    <img class="card-img-top" src="{{Storage::url($blog->imagem)}}" alt="Imagem de capa do card">
        <h4 class="mb-3 mt-3">{{$blog->titulo}}</h4>
        <p class="mb-3 mt-3 text-right"><strong>Status:</strong>{{$blog->status}}</p>
   
    <div class="row">
        <p class="col-sm-12 font-weight-light text-justify">{{$blog->mensagem}}</p>
    </div>

    <div class="box-footer text-center">
        <div class="btn-group">
            {{-- @permission('item-edit') --}}
            <a href="{{route('admin.blog.edit',['blog'=>$blog->id])}}">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
            </a>
            {{-- @endpermission --}}
        </div>
        <div class="btn-group">
        <form action="{{route('admin.blog.destroy',['blog'=>$blog->id])}}" method="post" style="margin-right: 5px;">
@csrf
@method('delete')
<button type="submit" class="btn btn-danger"><i class="fa fa-close"></i>
    Excluir
</button>
</form>

        </div>

        <!--Footer-->
    </div>
    <!-- /.box-footer-->

<div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
