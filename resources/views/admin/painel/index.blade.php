{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Administrativo | Anipet')

@section('content_header')
@stop

@section('content')
 
<div class="container">

 
      <h3 class="mb-5 mt-3 text-center text-secondary">Painel Principal</h3>
  <div class="row col-sm-12 mt-3 center-block mb-3 ">
        
    <div class="bg-orange col-sm-2   mt-1 mb-1 rounded border"  style=" margin-left: auto; margin-right: auto;">
        <h1 style="font-size: 30px;" class="text-center mt-3 text-light">{{$qtdAnimaisAtivos}}</h1>
        <h5  class="text-center text-light">Animais Ativos</h5>
    </div>
    <div class="bg-blue col-sm-2   mt-1 mb-1  rounded border"  style="margin-left: auto; margin-right: auto;">
        <h1 style="font-size: 30px;" class="text-center  mt-3 text-light">{{$qtdAnimaisAdotados}}</h1>
        <h5  class="text-center text-light">Animais Adotados</h5>
    </div>
    <div class="bg-green col-sm-2    mt-1 mb-1   rounded border" style="margin-left: auto; margin-right: auto;">
    <h1 style="font-size: 30px;" class="text-center mt-3 text-light">{{$qtdDepoimentosRecebidos}}</h1>
        <h5  class="text-center text-light">Depoimentos Recebidos</h5>
    </div>

    <div class="bg-red col-sm-2    mt-1 mb-1   rounded border" style="margin-left: auto; margin-right: auto;">
    <h1 style="font-size: 30px;" class="text-center mt-3 text-light">{{$qtdSolicitacoesPendentes}}</h1>
      <h5  class="text-center text-light">Solicitações Pendentes</h5>
  </div>

</div>

    <div class="row col-sm-12 ">

        <div class=" bg-white col-sm-12 mr-5 mb-3 rounded border">
        <h5  class="text-center mb-3 mt-3">Novos Depoimentos</h5>             
        <table class="table">
            <thead class="table table-striped table-bordered">
              <tr>
                <th class="text-orange" scope="col">Código</th>
                <th class="text-orange" scope="col">Nome</th>
                <th class="text-orange" scope="col">Mensagem</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($depoimentos as $depoimento)
                  <tr>
                    <td scope="row">{{$depoimento->codigo_solicitacao}}</td>
                    <td>{{$depoimento->nome}}</td>
                    <td>{{$depoimento->status}}</td>
                    <td>
                        <div class="btn-group-toggle">
                          <a href="{{ route('admin.depoimento.show', ['depoimento' => $depoimento->id]) }}">
                            <button type="button" class="btn btn-success">Abrir</button>
                          </a>
                        </div>
                    </td>
                </tr>
               @endforeach 
            </tbody>
          </table>

        </div>


            <div class=" bg-white col-sm-12 mb-3 rounded border">
                <h5  class="text-center mb-3 mt-3">Novas Solicitações</h5 >             
                <table class="table">
                    <thead class="table table-striped table-bordered">
                      <tr>
                        <th class="text-blue" scope="col">Código</th>
                        <th class="text-blue" scope="col">Nome</th>
                        <th class="text-blue" scope="col">Mensagem</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($solicitacoes as $item)
                          
                        <tr>
                        <td scope="row">{{$item->codigo}}</td>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->mensagem}}</td>
                            <td>
                                <div class="btn-group-toggle">
                                  <a href="{{ route('admin.solicitacao.show', ['solicitacao' => $item->id]) }}">
                                    <button type="button" class="btn btn-success">Abrir</button>

                                </a>
                              </div>
                            </td>
                        </tr>
                      @endforeach
 
                    </tbody>
                  </table>
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