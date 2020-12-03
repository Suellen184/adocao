@extends('front.master.master')


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

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    
                </div>


                <div class="container box_1170">
    <div class="section-top-border">
			
			<div class="row">
				<div class="col-md-6">
					

              <!--   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-200" src="imagens/gato_exemplo_1.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-200" src="imagens/gato_exemplo_2.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-200" src="imagens/gato_exemplo_3.jpg" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>  
---->      
       <img src="">
				<div class="col-md-6 mt-sm-20">
                <h1 class="mb-30">{{ $animal->nome }}</h1>
                <ul class="mb-3 unordered-list">
							<li> <strong>Tipo:</strong> {{ $animal->tipo }}</li>
							<li><strong>Cor:</strong> {{ $animal->cor }}</li>
							<li> <strong>Sexo:</strong> {{ $animal->sexo }}</li>                           
                            <li><strong>Tamanho:</strong> {{ $animal->tamanho }}</li>
                            <li><strong>Data de Nasciemento:</strong> {{ $animal->data_nascimmento }}</li>
				</ul> 
				  <p> <li><strong>Oservação:</strong> {{ $animal->observacao }}</li></p>
				</div>
			</div>
		</div>
     </div>

     <div style="height:100px"> </div>
    
    
     <div class="col-12 mb-5">
                        <h2 class="contact-title text-center">Quero Adotar!</h2>
		<p class="sample-text text-center">
		Para a adoção ser feita, primeiramente preencha as informações solicitadas nos campos abaixo, sua solicitação será avaliada e entraremos em contato.
        </p>
     </div>
       
        <div style="height:100px" class="col-sm-12"> </div>

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
    <!-- ================ contact section end ================= -->
    <div style="height:580px" class="col-sm-12"> </div>
@endsection