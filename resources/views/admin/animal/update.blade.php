{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Item - Visualizar</h1>
<ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Item</a></li>
    <li class="active">Visualizar</li>
</ol>@stop

@section('content')


<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container">

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $animal->nome_animal }}</h3>
        </div>
        <div class="box-body">
            <img src="{{ $animal->imagem_animal }}" alt=""><br>
            <strong>Nome:</strong> {{ $animal->nome_animal }}<br>
            <strong>Data de Nascimento:</strong> {{ $animal->data_nascimento }}<br>
            <strong>Raça:</strong> {{ $animal->raca }}
            <strong>Raça:</strong> {{ $animal->sexo }}

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
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