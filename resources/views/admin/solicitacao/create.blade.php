{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Criar Solicitação')

@section('content_header')

@stop

@section('content')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <h4 class="text-center font-weight-bold mb-5">Pedido de Adoção</h4>

    @if(isset($error))
        <p>{{ $error }}</p>
        @foreach($error as $e)
            <p>$e</p>
        @endforeach
        @php()
            echo $error;
        @endphp
    @endif

    <form action="{{route('admin.solicitacao.store')}}" class="needs-validation" novalidate method="post"
          autocomplete="off">
        @csrf

        <div class="row">

            <div class="input-group mb-3 col-12">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Animal em questão</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="animal">
                    <option value="{{ $animal->id }}" selected>{{ $animal->nome }}, {{ $animal->tamanho }}</option>
                </select>
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-5 mb-3">
                <label for="validationCustom01">Nome</label>
                <input value="{{ old('nome') }}" type="text" class="form-control" id="validationCustom01" name="nome"
                       placeholder="Escreva seu nome" required minlength="2" maxlength="92">
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite um nome válido.
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="validationCustom02">Sobrenome</label>
                <input value="{{ old('sobrenome') }}" type="text" class="form-control" id="validationCustom02"
                       name="sobrenome" placeholder="Escreva seu sobrenome" required minlength="2" maxlength="92">
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite um sobrenome válido.
                </div>
            </div>

            <div class="col-md-2 mb-3">
                <label for="validationCustomUsername">CPF</label>
                <div class="input-group">
                    <input value="{{ old('cpf') }}" type="text" class="form-control" id="validationCustomTelefone"
                           name="cpf" placeholder="CPF" aria-describedby="inputGroupPrepend" required minlength="11"
                           maxlength="14">
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite um CPF válido.
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="validationCustom02">Email</label>
                    <input value="{{ old('email') }}" type="email" class="form-control" id="validationCustom02"
                           name="email" placeholder="Escreva seu email" required>
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite um email válido.
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <label for="validationCustom01">Telefone</label>
                    <input value="{{ old('tel') }}" type="text" class="form-control" id="validationCustom01" name="tel"
                           placeholder="Digite seu telefone" required minlength="8" maxlength="20">
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite um telefone válido.
                    </div>
                </div>

                <div class="col-sm-2 mb-3">
                    <label for="validationCustom05">CEP</label>
                    <input value="{{ old('cep') }}" type="text" class="form-control" id="validationCustom05"
                           placeholder="CEP"
                           name="cep" required minlength="8" maxlength="8">
                    <div class="valid-feedback">
                        Tudo certo!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite um CEP válido.
                    </div>
                </div>
                <div class="form-group col-sm-4">
                    <label for="status">Status</label>
                    <select class="form-control"  name="status"  id="status">
                        <option value="realizada">Disponivel</option>
                        <option value="adotados">Inativo</option>
                    </select>
                </div>
                

                <div class="form-group col-sm-12">
                    <label for="exampleFormControlTextarea1">Por que você deseja adotar @if($animal->sexo == 'macho')
                            o @else a @endif {{ $animal->nome }}?</label>
                    <textarea class="form-control " name="mensagem" id="exampleFormControlTextarea1"
                              rows="3" required>{{ old('mensagem')   }}</textarea>
                </div>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite uma mensagem válida.
                </div>

                <div class="form-group col-sm-12">
                    <label for="exampleFormControlTextarea1">Observação do Administrador</label>
                    <textarea class="form-control " name="observacao" id="exampleFormControlTextarea1"
                              rows="3">{{ old('observacao')   }}</textarea>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Eu concordo com os termos e condições.
                </label>
                <div class="invalid-feedback">
                    Você deve concordar com os termos e condições.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>

    </form>

    <script>
        // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                var forms = document.getElementsByClassName('needs-validation');
                // Faz um loop neles e evita o envio
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
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
