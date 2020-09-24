{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Vizualizar')

@section('content_header')
@section('content')

<h3>Vizualizar Animal</h3>

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">
    <?php foreach ($animais as $animal) { ?>
    <div class="box">
        <div class="box-header with-border">
        </div>
        <div class="box-body">
            <img src="{{ $animal->imagem_animal }}" alt=""><br>
            <strong>Nome:</strong> {{ $animal->nome }}<br>
            <strong>Data de Nascimento:</strong> {{ $animal->data_nascimento }}<br>
            <strong>Raça:</strong> {{ $animal->raca }}
            <strong>Sexo:</strong> {{ $animal->sexo }}

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <div class="btn-group">
                    {{-- @permission('item-edit') --}}
                    <a href=""><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button></a>
                    {{-- @endpermission --}}
                </div>        
                <div class="btn-group">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Excluir</button>
                </div>

            <!--Footer-->
        </div>      
        <!-- /.box-footer-->
    </div>
    <?php } ?>

</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop