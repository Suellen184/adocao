{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Solicitação - Editar | Anipet')

@section('content_header')
@stop

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<h4 class="text-center font-weight-bold mb-5">Atualizar Solicitação</h4>

<form action="" class="needs-validation" novalidate method="post" autocomplete="off">
    @csrf
         <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="validationCustom01">Código</label>
              <input value="{{$solicitacao->codigo}}" type="text" class="form-control" id="validationCustom01" name="codigo" placeholder="Código" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Primeiro nome</label>
              <input value="{{$solicitacao->nome}}" type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Sobrenome</label>
              <input value="{{$solicitacao->sobrenome}}" type="text" class="form-control" id="validationCustom02" name="sobrenome" placeholder="Sobrenome" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div> 
            <div class="col-md-2 mb-3">
              <label for="validationCustomUsername">CPF</label>
              <div class="input-group">
                <input value="{{$solicitacao->cpf}}" type="text" class="form-control" id="validationCustomTelefone" name="cpf" placeholder="cpf" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Por favor, escolha um CPF.
                </div>
              </div>
            </div>
  <div class="row col-sm-12"> 
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Telefone</label>
          <input value="{{$solicitacao->telefone}}" type="text" class="form-control" id="validationCustom01" name="telefone" placeholder="telefone" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">E-mail</label>
          <input value="{{$solicitacao->email}}" type="text" class="form-control" id="validationCustom02" name="email" placeholder="email" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
        </div>
         <div class="col-md-4 mb-3">
          <label for="validationCustom05">CEP</label>
          <input value="{{$solicitacao->cep}}" type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
          <div class="invalid-feedback">
            Por favor, informe um CEP válido.
          </div>
        </div>
      </div>
    </div>
       
    
    <div class="form-group col-sm-12">
      <label for="exampleFormControlTextarea1">Por que você deseja adotar?</label>
      <textarea class="form-control " name="mensagem" id="exampleFormControlTextarea1"
    rows="3" required>{{$solicitacao->mensagem}}</textarea>
  </div>
  <div class="valid-feedback">
      Tudo certo!
  </div>
  <div class="invalid-feedback">
      Por favor, digite uma mensagem válida.
  </div>

  <div class="form-group col-sm-12">
      <label for="exampleFormControlTextarea1">Observação do Administrador</label>
      <textarea class="form-control " name="observacao_by_admin" id="exampleFormControlTextarea1"
  rows="3">{{$solicitacao->observacao_by_admin }}</textarea>
  </div>
</div>
      <button class="btn btn-primary ml-3" type="submit">Enviar</button>

    </form>
    
    <script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
