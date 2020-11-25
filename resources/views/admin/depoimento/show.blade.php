{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Visualizar Depoimento')

@section('content_header')
@section('content')

<h4 class="text-center font-weight-bold mb-5">Depoimento</h4>
</br>
    <div class="container">
        <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
                <img src="{{Storage::url($depoimento->imagem)}}" alt=""   style="width: 200px; height: 200px;" class=" rounded float-right"><br>


             
            <div class="row">   
                <p class="col-sm-4">  <strong>Código:</strong>{{ $depoimento->codigo }} <br></p>
            </div>    
                <div class="row">
                    <p class="col-sm-4">  <strong>Nome:</strong> {{ $depoimento->nome }}<br></p>
                    <p class="col-sm-4"> <strong>Título:</strong> {{ $depoimento->titulo }}<br></p>
                    <p class="col-sm-4"> <strong>Status:</strong> {{ $depoimento->status }}</p>
                </div>
              
             <div class="row">
                 <p class="col-sm-12"> <strong>Mensagem:</strong> {{ $depoimento->mensagem }}</p>
             </div>
                <img src="" alt=""><br>
    
            </div>
            <div class="box-footer">
                <div class="btn-group">
                    {{-- @permission('item-edit') --}}
                    <a href="{{route('admin.depoimento.edit',['depoimento'=>$depoimento->id])}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                    </a>
                    {{-- @endpermission --}}
                </div>
                <div class="btn-group">
                    <form action="{{route('admin.depoimento.destroy',['depoimento'=>$depoimento->id])}}" method="post">
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
