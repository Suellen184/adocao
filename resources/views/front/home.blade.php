@extends('front.master.master')

@section('title', 'Home')
@section('description', 'O maior site de adoção de animais da América Latina!')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="text-center text-lg-left text-light col-12">
                                <h1 class="text-light display-3">Adote<br>um amigo.</h1>
                                <p class="text-light">Eles estão esperando o seu carinho!<br></p>
                            </div>
                            <div class="col-12" style="z-index: 2;">
                                <a href="" class="boxed-btn4">Adotar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="{{ URL::asset('front/assets/img/banner/dog.png') }}" alt="">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->



    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="{{ URL::asset('front/assets/img/about/pet_care.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3>Precisamos da sua ajuda!</h3>
                            <p>Contribua com algum valor ou com sua ajuda no nosso abrigo. Nosssos animais precisam de cuidado!</p>
                            <a href="" class="boxed-btn3">Eu quero ajudar</a>
                         
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
                <div class="col-lg-6">
                    <div class="adapt_about">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="{{ URL::asset('front/assets/img/adapt_icon/2.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">72</span>+</h3>
                                        <p>Adoções Realizadas</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_adapt text-center">
                                    <img src="{{ URL::asset('front/assets/img/adapt_icon/1.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">22</span></h3>
                                        <p>Gatos Disponíveis</p>
                                    </div>
                                </div>
                                <div class="single_adapt text-center">
                                    <img src="{{ URL::asset('front/assets/img/adapt_icon/3.png') }}" alt="">
                                    <div class="adapt_content">
                                        <h3><span class="counter">31</span></h3>
                                        <p>Cães Disponíveis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="adapt_help">
                        <div class="section_title text-left">
                            <h3 class="">Já adotou um animal?</h3>
                            <p>Nos envie seu testemunho! Queremos saber como está sendo pra você esse tempo.</p>
                            <a href="about.html" class="boxed-btn3">Enviar</a>
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

    <!-- team_area_start  -->
    <div class="team_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Nossa Equipe</h3>
                        <p>Nossa equipe é formada por pessoas que amam o que fazem. Ajudar os bichinhos
                            com muita dedicação e amor sempre será nossa prioridade.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="front/assets/img/team/leo.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Leonardo</h4>
                                <p>Diagramador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="front/assets/img/team/suellen.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Suellen</h4>
                                <p>Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="front/assets/img/team/josue.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Josué</h4>
                                <p>Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="front/assets/img/team/raquel.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Raquel</h4>
                                <p>Prog. Back End</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="front/assets/img/team/tiago.png" alt="">
                        </div>
                        <div class="member_name text-center">
                            <div class="mamber_inner">
                                <h4>Tiago</h4>
                                <p>Prog. Back End</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- team_area_start  -->
@endsection

@section('head')
    <script>

        $('document').ready(() = > {
            $("a[href^='#']"
        ).on('click', function (e) {
            e.preventDefault();
            var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset - 100
            }, 500);
        })
        })

    </script>
@endsection