{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Visualizar Solicitação')

@section('content_header')
@section('content')

<h4 class="text-center font-weight-bold mb-5">Solicitação</h4>     </br>
    <div class="container">
        <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
                <img src="" alt=""  style="width: 200px; height: 200px;"  class="img-thumbnail  rounded float-right" class="img-fluid"><br>


            <p>{{$solicitacao->animal->nome}}</p>
            <div class="row">   
                <p class="col-sm-4">  <strong>Código: </strong> {{$solicitacao->codigo}}<br></p>
            </div>    
                <div class="row">
                    <p class="col-sm-4">  <strong>Nome: </strong>{{$solicitacao->nome}} <br></p>
                    <p class="col-sm-4"> <strong>Sobrenome: </strong>{{$solicitacao->sobrenome}} <br></p>
                    <p class="col-sm-4"> <strong>CPF: </strong> {{$solicitacao->cpf}}</p>
               </div>
             <div class="row">
                 <p class="col-sm-4"> <strong>Telefone: </strong>{{$solicitacao->telefone}}</p>
                 <p class="col-sm-4"> <strong>Email: </strong>{{$solicitacao->email}} </p>
                 <p class="col-sm-4"> <strong>Cidade: </strong>{{$solicitacao->cidade}}</p>
             </div>
             
             <div class="row">
                 <p class="col-sm-4"> <strong>CEP: </strong>{{$solicitacao->cep}} </p>
                 <p class="col-sm-4"> <strong>Status: </strong>{{$solicitacao->status}} </p>
                 <p class="col-sm-4"> <strong>Texto: </strong>{{$solicitacao->texto}} </p>
             </div>
             
             <div class="row">
                 <p class="col-sm-12"> <strong>Observação: </strong>{{$solicitacao->observacao}}</p>
             </div>
                <img src="" alt=""><br>
    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="btn-group">
                    {{-- @permission('item-edit') --}}
                    <a href="{{route('admin.solicitacao.edit',['solicitacao'=>$solicitacao->id])}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                    </a>
                    {{-- @endpermission --}}
                </div>
                <div class="btn-group">
                <form action="{{route('admin.solicitacao.destroy',['solicitacao'=>$solicitacao->id])}}" method="post">
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
