@extends('front.master.master')

@section('content')

 <!-- slider_area_start -->
 <div class="slider_area">
    <div class="single_slider slider_bg_1 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="slider_text text-center">
                        <h3>Adote <br>  um <br>  amigo</h3>
                        <p>  O Amor que falta para complementar <br>  sua vida pode estar aqui à sua espera!</p>
                        <a href="{{ route('front.contato')}}" class="boxed-btn4">Faça uma doação</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dog_thumb d-none d-lg-block">
            <img src="front/assets/img/banner/dog.png" alt="">
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- service_area_start  -->
<div class="service_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-7 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Faça Sua Parte :)</h3>
                    <p>Contribua adotando um bichinho para que ele possa ter uma familia repleta de amor!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_service active">
                     <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                         <div class="service_icon">
                             <img src="front/assets/img/service/service_icon_4.png" alt="">
                         </div>
                     </div>
                     <div class="service_content text-center">
                        <h3>Adote um gato</h3> 
                     </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single_service">
                     <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                         <div class="service_icon">
                             <img src="front/assets/img/service/service_icon_3.png" alt="">
                         </div>
                     </div>
                     <div class="service_content text-center">
                        <h3>Adote um cão</h3>
                     </div>
                </div>
            </div>  
        </div>
        <div class="text-center"> <a href="about.html" class="boxed-btn3 ">Ver Todos</a> </div>
    </div>
</div>
<!-- service_area_end -->

<!-- pet_care_area_start  -->
<div class="pet_care_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="pet_thumb">
                    <img src="front/assets/img/about/pet_care.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <div class="pet_info">
                    <div class="section_title text-center">
                        <h3><span>Contribua de outras formas, faça uma doação!</h3>
                        <p>Caso você queira contribuir de outras maneiras, estamos abertos para
                        receber ajuda de todas as formas, seja com trabalho voluntário, 
                        doação em dinheiro, ração ou brinquedos para os bichinhos :)</p>
                        <div class="text-center">  <a href="about.html" class="boxed-btn3">Saiba Como</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pet_care_area_end  -->

<!-- adapt_area_start  -->
<div class="adapt_area">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 text-center">
                <div class="adapt_help">
                    <div class="section_title">
                        <h3><span>Divulgue! <br>Com sua ajuda chegaremos mais longe.</span></h3>
                        <p>Sua ajuda é fundamental para alcançarmos novas pessoas
                           para que cada vez mais bichinhos encontrem um lar cheio de amor</p>
                        <a href="contact.html" class="boxed-btn3">Compartilhe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adapt_about">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="front/assets/img/adapt_icon/2.png" alt="">
                                <div class="adapt_content">
                                    <h3 class="counter">452</h3>
                                    <p>Bichinhos Disponíveis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_adapt text-center">
                                <img src="front/assets/img/adapt_icon/3.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Cachorrinhos Adotados</p>
                                </div>
                            </div>
                            <div class="single_adapt text-center">
                                <img src="front/assets/img/adapt_icon/4.png" alt="">
                                <div class="adapt_content">
                                    <h3><span class="counter">52</span>+</h3>
                                    <p>Gatinhos Adotados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- adapt_area_end  -->

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

<!-- team_area_start  -->
<div class="team_area">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-6 col-md-10">
                <div class="section_title text-center mb-95">
                    <h3>Nossa Equipe</h3>
                    <p>Nossa equipe é formada primeiramente por pessoas que amam o que fazem, ajudar os bichinhos com muita dedicação é amor sempre vai ser nossa prioridade.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="front/assets/img/team/1.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>Rala Emaia</h4>
                            <p>Senior Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="front/assets/img/team/2.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>jhon Smith</h4>
                            <p>Senior Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_team">
                    <div class="thumb">
                        <img src="front/assets/img/team/3.png" alt="">
                    </div>
                    <div class="member_name text-center">
                        <div class="mamber_inner">
                            <h4>Rala Emaia</h4>
                            <p>Senior Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- team_area_start  -->

<div class="contact_anipat anipat_bg_1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact_text text-center">
                    <div class="section_title text-center">
                        <h3>Why go with Anipat?</h3>
                        <p>Because we know that even the best technology is only as good as the people behind it. 24/7 tech support.</p>
                    </div>
                    <div class="contact_btn d-flex align-items-center justify-content-center">
                        <a href="contact.html" class="boxed-btn4">Contact Us</a>
                        <p>Or  <a href="#"> +880 4664 216</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection