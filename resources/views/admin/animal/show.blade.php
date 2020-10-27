{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Vizualizar')

@section('content_header')
@section('content')

    <h4>Vizualizar Animal</h4>



<div class="container">

<img src="{{Storage::url($animal->imagem)}}" alt=""  style="width: 200px; height: 200px;" class="img-fluid"><br>
  <div class="row">
       <p class="col-sm-4">  <strong>Nome:</strong> {{ $animal->nome }}<br></p>
       <p class="col-sm-4"> <strong>Data de Nascimento:</strong> {{ $animal->data_nascimento }}<br></p>
       <p class="col-sm-4"> <strong>Status:</strong> {{ $animal->status }}</p>

  </div>
<div class="row">
    <p class="col-sm-4"> <strong>Raça:</strong> {{ $animal->raca }}</p>
    <p class="col-sm-4"> <strong>Sexo:</strong> {{ $animal->sexo }}</p>
    <p class="col-sm-4"> <strong>Tamanho:</strong> {{ $animal->tamanho }}</p>
</div>

<div class="row">
    <p class="col-sm-4"> <strong>Tipo:</strong> {{ $animal->tipo }}</p>
</div>

<div class="row">
    <p class="col-sm-12"> <strong>Observação:</strong> {{ $animal->mensagem }}</p>
</div>

            <!-- /.box-body -->
            <div class="box-footer">
                <div class="btn-group">
                    {{-- @permission('item-edit') --}}
                    <a href="{{route('admin.animal.edit',['animal'=>$animal->id])}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                    </a>
                    {{-- @endpermission --}}
                </div>
                <div class="btn-group">
                    <form action="{{route('admin.animal.destroy',['animal'=>$animal->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Excluir</button>
                    </form>

                </div>

                <!--Footer-->
            </div>
            <!-- /.box-footer-->
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
