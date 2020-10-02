{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Solicitação')

@section('content_header')
    <h4>Cadastrando Solicitação</h4>
@stop

@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<form action="{{route('admin.solicitacao.store')}}" class="needs-validation" novalidate method="post" autocomplete="off">
    @csrf


          <div class="form-row">
            <div class="col-md-2 mb-3">
              <label for="validationCustom01">Código</label>
              <input type="text" class="form-control" id="validationCustom01" name="codigo" placeholder="Código" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>

          </div>

          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Primeiro nome</label>
              <input type="text" class="form-control" id="validationCustom01" name="nome" placeholder="Nome" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Sobrenome</label>
              <input type="text" class="form-control" id="validationCustom02" name="sobrenome" placeholder="Sobrenome" required>
              <div class="valid-feedback">
                Tudo certo!
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustomUsername">Idade</label>
              <div class="input-group">
                <input type="text" class="form-control" id="validationCustomTelefone" name="idade" placeholder="idade" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Por favor, escolha uma Idade.
                </div>
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustomUsername">CPF</label>
              <div class="input-group">
                <input type="text" class="form-control" id="validationCustomTelefone" name="cpf" placeholder="cpf" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Por favor, escolha um CPF.
                </div>
              </div>
            </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Telefone</label>
          <input type="text" class="form-control" id="validationCustom01" name="telefone" placeholder="telefone" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
        </div>


        <div class="col-md-4 mb-3">
          <label for="validationCustom02">E-mail</label>
          <input type="text" class="form-control" id="validationCustom02" name="email" placeholder="email" required>
          <div class="valid-feedback">
            Tudo certo!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationCustom05">CEP</label>
          <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" name="cep" required>
          <div class="invalid-feedback">
            Por favor, informe um CEP válido.
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Concordo com os termos e condições
          </label>
          <div class="invalid-feedback">
            Você deve concordar, antes de continuar.
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Enviar</button>

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
