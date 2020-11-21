@extends('front.master.master')
@section('title', 'Quero ajudar')
@section('description', 'O maior site de adoção de animais da América Latina!')

@section('content')

     <!-- bradcam_area_start -->
     <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Envie um testemunho</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->


    <!-- Start Sample Area -->
<section class="sample-text-area">
	<div class="container box_1170">
    <div>
		<h3 class="text-heading text-center">Quem pode enviar?</h3>
		<p class="sample-text text-center">
            Você que adotou um dos nossos animais? Nos envie um depoimento falando o como está sendo esse momento pra você.
            Colocaremos em nosso site durante um mês. <b> O que é necessário para enviar o testemunho? </b>  Código da adoção, 
            Uma imagem, Um título, Uma mensagem, eu nome
        </p>

        <div style="height:100px" class="col-sm-12"> </div>

        <div class="col-lg-30 ">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
                                    </div>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="codigo" id="codigo" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Codigo'" placeholder="Codigo">
                                    </div>
                                    
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="titulo" id="titulo" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Titulo'" placeholder="Titulo">
                                    </div>
                                    
                                </div>
                                

                                

                                    <div class="col-12">
                                    <div class="form-group ">
                                        <textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua Mensagem'" placeholder="Sua Mensagem"></textarea>
                                    </div>
                                </div>

                                </div>
                            </div>
                            
                            <button type="button" class="btn btn-default btn-lg btn-block">Enviar Foto</button>
                            <div style="height:50px" class="col-sm-12"> </div>
                            <div class="form-group mt-3 text-center">
                                <button type="submit" class="button button-contactForm boxed-btn">Enviar Depoimento</button>
                            </div>
                        </form>
                    </div>
    </div>
	</div>
    
</section>
<!-- End Sample Area -->



  <!-- testmonial_area_start  -->
  <div class="testmonial_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="textmonial_active owl-carousel">
                    <div class="testmonial_wrap">

                        <div class="single_testmonial d-flex align-items-center">
                            <div class="test_thumb">
                                <img style="width: 200px; height; 200px;"src="" alt="">
                            </div>
                            <div class="test_content">
                                <h4></h4>
                                <span></span>
                                <p></p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exerci.</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exerci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- testmonial_area_end  -->





    @endsection