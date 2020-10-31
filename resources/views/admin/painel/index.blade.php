{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Painel de Administrador')

@section('content_header')
@stop

@section('content')

<div class="container">

    <div class="row">

        <div class=" bg-white col-sm-5 mr-5  rounded border">
        <h5  class="text-center mb-3 text-secondary mt-3">Novos Depoimentos</h5>             
        <table class="table">
            <thead class="table table-striped table-bordered">
              <tr>
                <th class="text-secondary" scope="col">Código</th>
                <th class="text-secondary" scope="col">Nome</th>
                <th class="text-secondary" scope="col">Mensagem</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              
                <tr>
                    <td scope="row">1231</td>
                    <td>Rogério</td>
                    <td>Oi eu sou o Rogério!...</td>
                    <td>
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="checkbox" checked autocomplete="off"> Checado
                            </label>
                          </div>
                    </td>
                </tr>
            </tbody>
          </table>

        </div>


            <div class=" bg-white col-sm-5 rounded border">
                <h5  class="text-center text-secondary mb-3 mt-3">Novas Solicitações</h5 >             
                <table class="table">
                    <thead class="table table-striped table-bordered">
                      <tr>
                        <th class="text-secondary" scope="col">Código</th>
                        <th class="text-secondary" scope="col">Nome</th>
                        <th class="text-secondary" scope="col">Mensagem</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary active">
                                      <input type="checkbox" checked autocomplete="off"> Abrir
                                    </label>
                                  </div>
                            </td>
                        </tr>
                    </tbody>
                  </table>
        </div>

    </div>

    <div class="row col-sm-6 mt-3 mb-3 ">
        
        <div class="bg-white col-sm-5   mt-1 mb-1 mr-1  rounded border">
                <h1 style="font-size: 30px;" class="text-center mt-3 text-secondary">50</h1>
                <h5  class="text-center text-secondary">Animais Ativos</h5>
        </div>
        <div class="bg-white col-sm-5   mt-1 mb-1  rounded border">
            <h1 style="font-size: 30px;" class="text-center  mt-3 text-secondary">30</h1>
            <h5  class="text-center text-secondary">Animais Adotados</h5>
        </div>
        <div class="bg-white col-sm-5    mt-1 mb-1 mr-1  rounded border">
            <h1 style="font-size: 30px;" class="text-center mt-3 text-secondary">20</h1>
            <h5  class="text-center text-secondary">Depoimentos Recebidos</h5>
        </div>

        <div class="bg-white col-sm-5   mt-1 mb-1  rounded border">
            <h1 style="font-size: 30px;" class="text-center  mt-3 text-secondary">100</h1>
            <h5  class="text-center text-secondary">Animais Recuperados</h5>
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