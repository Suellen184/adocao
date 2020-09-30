{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Vizualizar')

@section('content_header')
@section('content')

    <h4>Vizualizar Solicitação</h4>
     </br>
    <div class="container">
        <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
                <img src="" alt=""><br>
                <strong>Nome:</strong>
                <strong>Sobrenome:</strong>
                <strong>CPF:</strong><br>
                <strong>Telefone:</strong>
                <strong>email:</strong><br>
                <strong>Cidade:</strong>
                <strong>CEP:</strong><br>
                <strong>Status:</strong><br>
                <strong>Texto:</strong><br>
                <strong>Observação:</strong>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
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
        </div>


    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
