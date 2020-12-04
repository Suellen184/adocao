@extends('front.master.master')

@section('title', 'Solicitações')

@section('content')
@if (Session::has('message'))
<div class="alert alert-sucess bg-success text-white">{{ Session::get('message') }}</div>
@endif
     <!-- bradcam_area_start -->
     <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                    <h3>Oi Humano! <br> Gostou de mim?</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- bradcam_area_end -->
  <div class="row justify-content-center col-sm-12" style="margin-top: 50px;"> 
            <div class="col-sm-5"> 
                <img class="rounded img-thumbnail" style="margin-left: 200px; width: 300px; height: 300px"src="{{Storage::url($animal->imagem)}}">
            </div>   
                <div class="col-sm-5">
                        <h1 class="mb-30">{{ $animal->nome }}</h1>
                        <ul class="mb-3 unordered-list">
                                    <li> <strong>Tipo:</strong> {{ $animal->tipo }}</li>
                                    <li><strong>Cor:</strong> {{ $animal->cor }}</li>
                                    <li> <strong>Sexo:</strong> {{ $animal->sexo }}</li>                           
                                    <li><strong>Tamanho:</strong> {{ $animal->tamanho }}</li>
                                    <li><strong>Data de Nascimento:</strong> {{ $animal->data_nascimento }}</li>
                        </ul> 
                        <p> <li><strong>Oservação:</strong> {{ $animal->observacao }}</li></p>
				</div>

            </div>
    <div>
	
     

     <div style="height:100px"> </div>
    
    
     <div class="col-sm-12 mb-5">
                        <h2 class="contact-title text-center">Quero Adotar!</h2>
		<p class="sample-text text-center"  style="padding-left: 30px; padding-right: 30px;">
		Para a adoção ser feita, você precisa ser maior de 18 anos, ter uma residência e meios de contato. Preencha as informações solicitadas nos campos abaixo, sua solicitação será avaliada e entraremos em contato por email ou telefone.
        </p>
     </div>
       
        <div style="height:100px" class="col-sm-12"> </div>
        <div class="container"> 
                    <div class="col-lg-8" style="float:left">
                        <form action="{{ route('front.animais.get', ['id' => $animal->id]) }}" method="post">
                            @csrf

                            <div class="row">

                                <input type="hidden" name="animal" value="{{ $animal->id }}">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control " name="nome" id="nome" type="text" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control " name="sobrenome" id="sobrenome" type="text" placeholder="Sobrenome">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control " name="cpf" id="cpf" type="text" placeholder="CPF">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control " name="cep" id="cep" type="text" placeholder="CEP">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control " name="telefone" id="telefone" type="tel" placeholder="Telefone">
                                    </div>

                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="text" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="9" placeholder="Sua Mensagem"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="button button-contactForm boxed-btn ml-3">Enviar</button>

                            </div>

                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1" style="float:right">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- ================ contact section end ================= -->
    <div style="height:580px" class="col-sm-12"> </div>
@endsection