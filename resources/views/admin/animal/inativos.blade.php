{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Animais - Inativos| Anipet')

@section('content_header')

@stop

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.animal.index') }}">Animais</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inativos ou removidos</li>
        </ol>
    </nav>

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
                    "order": [[0, "desc"]]
                }
            });
        });
    </script>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="box box-info">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <!--<table class="table no-margin">-->
                            <table id="tabela" class="table table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Tipo</th>
                                    <th>Nome</th>
                                    <th>Status</th>
                                    <th>
                                    <a href="{{ route('admin.animal.create') }}" class="btn btn-outline-success btn-sm">
                                            Cadastrar
                                        </a>
                                        <a href="{{ route('admin.animal.adotados') }}" class="btn btn-outline-info btn-sm">
                                            Adotados
                                        </a>
                                        <a href="{{ route('admin.animal.inativos') }}" class="btn btn-outline-danger btn-sm">
                                            Inativos
                                        </a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($animais as $animal)
                                    <tr>
                                        <td class="text-capitalize">{{ $animal->tipo }}</td>
                                        <td class="text-capitalize">{{$animal->nome}}</td>
                                        <td class="text-capitalize @if($animal->status == 'disponivel') text-success @elseif($animal->status == 'negociacao') text-warning @elseif($animal->status == 'adotado') text-info @elseif($animal->status == 'inativo') text-danger @endif">
                                            <b>{{ $animal->status }}</b>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.animal.show', ['animal' => $animal->id]) }}">
                                                    <button type="button" style="margin-right: 5px;" class="btn btn-info btn-sm"><i
                                                                class="fa fa-search"></i> Visualizar
                                                    </button>
                                                </a>
                                                {{-- @permission('item-edit') --}}
                                                <a href="{{route('admin.animal.edit',['animal'=>$animal->id])}}" style="margin-right: 5px;">
                                                    <button type="button" class="btn btn-warning btn-sm"><i
                                                                class="fa fa-edit"></i> Editar
                                                    </button>
                                                </a>
                                                {{-- @endpermission --}}

                                                <a href="{{route('admin.solicitacao.create', ['animal'=>$animal->id])}}" style="margin-right: 5px;">
                                                    <button type="button" class="btn btn-success btn-sm"><i
                                                                class="fa fa-plus-square mr-1"></i> Recuperar
                                                    </button>
                                                </a>

                                                <form action="{{route('admin.animal.destroy',['animal'=>$animal->id])}}" method="post" style="margin-right: 5px;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-close"></i>
                                                        Excluir
                                                    </button>
                                                </form>
                                            </div>
                                    </tr>

                                </tbody>
                                @endforeach
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
