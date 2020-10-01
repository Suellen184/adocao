{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Vizualizar')

@section('content_header')
@section('content')

    <a href="">
        <button type="button" class="btn btn-success"> <strong>+</strong> Adicionar animal</button>
    </a>

    <br>
    <h4>Vizualizar Solicitação</h4>
     <br>
    <div class="container">

        <table class="table">
            <thead class="table table-striped table-bordered">
              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Cep</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">1234</td>
                    <td>oi</td>
                    <td>oi</td>
                    <td>oi</td>

                    <td>
                        <div class="btn-group">
                            <a href="">
                                <button type="button" style="margin-right: 5px;" class="btn btn-info"><i
                                        class="fa fa-search"></i> Visualizar
                                </button>
                            </a>
                            {{-- @permission('item-edit') --}}
                            <a href="" style="margin-right: 5px;">
                                <button type="button" class="btn btn-warning"><i
                                        class="fa fa-edit"></i> Editar
                                </button>
                            </a>
                            {{-- @endpermission --}}
                        </div>
                        <div class="btn-group">
                            <form action="" method="post" style="margin-right: 5px;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i>
                                    Excluir
                                </button>
                            </form>
                        </div>
            </tbody>
          </table>

    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop