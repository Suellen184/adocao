{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Verificar CPF')

@section('content_header')

@stop

@section('content')

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <h4 class="text-center font-weight-bold mb-5">Verificar CPF</h4>

    <form action="{{route('admin.solicitacao.verify.done')}}" class="needs-validation" novalidate method="post" autocomplete="off">
        @csrf

        <div class="form-row">
            <div class="col-lg-6">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="É necessário informar o seu CPF" required>
                <div class="valid-feedback">
                    Tudo certo!
                </div>
            </div>
        </div>

        <button class="btn btn-success mt-2" type="submit">Verificar...</button>
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
@stop
