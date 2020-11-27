@extends('front.master.master')



@section('content')
 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>Nossos animais</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bradcam_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Quem pode adotar?</h3>
                    <p>Para adotar um animal você precisa ser maior de 18 anos, ter uma residência, ter meios de contato. Tudo isso será avaliado
                        no momento em que fizermos o contato com o futuro adotante por email.  Caso sua solicitação seja aceita ou não lhes avisaremos também.
                    </p>
                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach ($animais as $animal)    
          
            <div class="col-lg-4 col-md-6">
                <div class="single_service">
                     <div class="service_thumb d-flex align-items-center justify-content-center">
                         <div class="">
                             <img src="{{Storage::url($animal->imagem)}}" alt="">
                         </div>
                     </div>
                     <div class="service_content text-center">
                        <h3>{{ $animal->nome }}</h3>
                        <p> {{ $animal->raca }} | {{ $animal->sexo }} | {{ $animal->tamanho }}</p>
                        <a href="{{ route('front.animais.show', ['id' => $animal->id]) }}" class="boxed-btn3">Adotar</a>
                     </div>
                </div>
            </div>
            @endforeach
         
        </div>
    </div>
</div>
<!-- service_area_end -->

<!-- testmonial_area_start  -->
<div class="testmonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="textmonial_active owl-carousel">
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="front/assets/img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="front/assets/img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testmonial_wrap">
                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img src="front/assets/img/testmonial/1.png" alt="">
                            </div>
                            <div class="test_content">
                                <h4>Jhon Walker</h4>
                                <span>Head of web design</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- testmonial_area_end  -->



<div class="contact_anipat anipat_bg_1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact_text text-center">
                    <div class="section_title text-center">
                        <h3>Gostou? Quer ajudar?</h3>
                        <p> Nossa ONG fica localizada no endereço, Rua dos Alperes, 550 - Jardim Botânico.</p>
                    </div> 
                    <div class="contact_btn d-flex align-items-center justify-content-center">
                        <a href="{{ route('front.ajuda')}}" class="boxed-btn4">Quero ajudar</a>
                        <p>Ou  <a href="#"> +880 4664 216</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   

@endsection