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


             
            <div class="row">   
                <p class="col-sm-4">  <strong>Código:</strong> <br></p>
            </div>    
                <div class="row">
                    <p class="col-sm-4">  <strong>Nome:</strong> <br></p>
                    <p class="col-sm-4"> <strong>Sobrenome:</strong> <br></p>
                    <p class="col-sm-4"> <strong>CPF:</strong> </p>
               </div>
             <div class="row">
                 <p class="col-sm-4"> <strong>Telefone:</strong></p>
                 <p class="col-sm-4"> <strong>email:</strong> </p>
                 <p class="col-sm-4"> <strong>Cidade:</strong></p>
             </div>
             
             <div class="row">
                 <p class="col-sm-4"> <strong>CEP:</strong> </p>
                 <p class="col-sm-4"> <strong>Status:</strong> </p>
                 <p class="col-sm-4"> <strong>Texto:</strong> </p>
             </div>
             
             <div class="row">
                 <p class="col-sm-12"> <strong>Observação:</strong></p>
             </div>
                <img src="" alt=""><br>
    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="btn-group">
                    {{-- @permission('item-edit') --}}
                    <a href="">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                    </a>
                    {{-- @endpermission --}}
                </div>
                <div class="btn-group">
                    <form action="" method="post">
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
