{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel Administrador')

@section('content_header')

@stop

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<script>
function ConfirmDelete() {
    return confirm('Tem certeza que deseja excluir este registro?');
}
</script>

<script>
    $(document).ready(function () {
        $('#tabela').DataTable({
            /*$('table.display').DataTable( {*/
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
                "order": [[ 0, "desc" ]]
            }
        });
    });
</script>

<div class="container">
    {{-- @permission('item-create') --}}
    <a href="{{ URL::to('admin/item/create') }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>Adicionar Cachorro</button></a>
    {{-- @endpermission --}}
    <p></p>

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <p>Aqui você pode editar, deletar e visualizar os cachorros.</p>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <!--<table class="table no-margin">-->
                        <table id="tabela"  class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Sexo</th>
                                    <th>Raça</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animais as $animal)                
                                <tr>
                                    <td>{{ $animal->nome_animal }}</td>
                                    <td>{{ $animal->sexo }}</td>
                                    <td>{{ $animal->raca }}</td>

                                    <td>
                                        <div class="btn-group">
                                            <a href=""><button type="button" class="btn btn-info"><i class="fa fa-search"></i> Visualizar</button></a>
                                            {{-- @permission('item-edit') --}}
                                            <a href=""><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button></a>
                                            {{-- @endpermission --}}
                                        </div>        
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Excluir</button>
                                        </div>
                                </tr>
                                @endforeach    
                            </tbody>
                        </table>
                        {{-- $itens->links() --}}

                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
            </div>
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