@extends('adminlte::page')

@section('title', 'Visualizar')

@section('content_header')
@section('content')

    <h4></h4>



<div class="container">

    <h4 class="text-center font-weight-bold mb-5">Artigo adocao</h4>
    <img class="img-thumbnail rounded mx-auto d-block" style="width: 30%; height: 40%;"src="https://cdn.pixabay.com/photo/2018/01/09/11/04/dog-3071334_960_720.jpg" alt="Third slide">
  
        <h4 class="mb-3 mt-3">Esse será o título</h4>
        <p class="mb-3 mt-3 text-right"><strong>Status:</strong> inativo</p>
   
    <div class="row">
        <p class="col-sm-12 font-weight-light text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi facere laborum repellendus, inventore asperiores fugit accusamus! Beatae eveniet quos, quibusdam, ipsa quod, obcaecati cumque modi debitis eligendi deleniti totam distinctio. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis optio repudiandae fugit excepturi quasi sunt possimus mollitia ratione inventore quas. Suscipit, quia repudiandae doloremque minus sequi nostrum voluptatem inventore necessitatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ab nulla assumenda. Vitae, magni maiores suscipit, doloremque quaerat voluptatem hic voluptas molestias, ex veniam temporibus ut libero. Quod, distinctio deserunt.</p>
         
    </div>

    <div class="box-footer text-center">
        <div class="btn-group">
            {{-- @permission('item-edit') --}}
            <a href="">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
            </a>
            {{-- @endpermission --}}
        </div>
        <div class="btn-group">
            <form action="" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Excluir</button>
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
