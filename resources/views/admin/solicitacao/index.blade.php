{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Visualizar Solicitações')

@section('content_header')
@section('content')
@if (Session::has('message'))
    <div class="alert alert-sucess bg-success">{{ Session::get('message') }}</div>
@endif

<h4 class="text-center font-weight-bold mb-5">Solicitaçães</h4>


    <a href="{{ route('admin.animal.index') }}">
        <button type="button" class="btn btn-success"> <strong>+</strong> Solicitar animal</button>
    </a>

    
    <div class="container">

        <table class="table">
            <thead class="table table-striped table-bordered">
              <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Cep</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($solicitacoes as $s);
                <tr>
                    <td scope="row">{{$s->codigo}}</td>
                    <td>{{$s->nome}}</td>
                    <td>{{$s->cep}}</td>

                    <td>
                        <div class="btn-group">
                        <a href="{{route('admin.solicitacao.show',['solicitacao'=>$s->id])}}">
                                                    <button type="button" style="margin-right: 5px;" class="btn btn-info"><i
                                                            class="fa fa-search"></i> Visualizar
                                                    </button>
                        </a>
                            {{-- @permission('item-edit') --}}
                            <a href="{{route('admin.solicitacao.edit',['solicitacao'=>$s->id])}}" style="margin-right: 5px;">
                                                    <button type="button" class="btn btn-warning"><i
                                                            class="fa fa-edit"></i> Editar
                                                    </button>
                                                </a>
                            {{-- @endpermission --}}
                        </div>
                        <div class="btn-group">
                        <form action="{{route('admin.solicitacao.destroy',['solicitacao'=>$s->id])}}" method="post" style="margin-right: 5px;">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i>
                                                        Excluir
                                                    </button>
                                                </form>
                        </div>
                    </td>
                </tr>
                    @endforeach
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
