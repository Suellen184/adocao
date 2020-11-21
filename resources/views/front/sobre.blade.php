@extends('front.master.master')

@section('title', 'Sobre')
@section('description', 'O maior site de adoção de animais da América Latina!')

@section('content')
    

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Sobre Nós</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

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
                        <div class="section_title">
                            <h3><span>Somos uma equipe </span> <br>
                             Compromissada</h3>
                            <p>Somos uma equipe de 5 amigos que nos reunimos para criar um sistema de adoção de animais. Com isso esperamos
                                facilitar a forma de adoção de animais e tornar esse cntato mais humano.
                            </p>
                            <a href="about.html" class="boxed-btn3">Entre em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pet_care_area_end  -->

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

    <div class="contact_anipat anipat_bg_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact_text text-center">
                        <div class="section_title text-center">
                            <h3>Quer nos conhecer?</h3>
                            <p>Você pode nos visitar para interagir com os animais. Nossa ONG fica localizada no endereço, Rua dos Alperes, 550 - Jardim Botânico.</p>
                        </div> 
                        <div class="contact_btn d-flex align-items-center justify-content-center">
                            <a href="{{ route('front.contato')}}" class="boxed-btn4">Envie-nos um email</a>
                            <p>Ou  <a href="#"> +880 4664 216</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection