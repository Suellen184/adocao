<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | Anipat - O maior site de adoção de animais da América Latina!</title>
    <meta content="@yield('description')" name="description" >
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('front/assets/img/favicon.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{url(mix('front/assets/css/vendor.css'))}}">
    <link rel="stylesheet" href="{{url(mix('front/assets/css/main.css'))}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    @yield('head')

    <style>
        .whatsapp {
            position: fixed;
            top: 88%;
            right: 1%;
            padding: 10px;
            z-index: 10;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="https://browsehappy.com/">atualize seu navegador</a> para uma melhor experiência e segurança.</p>
    <![endif]-->

    <!-- Botão do Whatsapp -->
    <div>
        <a href="https://api.whatsapp.com/send?phone=0&amp;text=Queria%20falar%20com%20um%20atendente%20da%20Anipat!" target="_blank"><img class="whatsapp" src="https://3.bp.blogspot.com/-ckiKOobNJy8/XRIGyySxDII/AAAAAAAACv0/09JFzT4vlcUYHq19lu-pQfWjYq6dyKYzQCLcBGAs/s1600/contatowhats.png"></a>
    </div>

    <header>
        <div class="header-area ">
            <div class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{ route('front.home') }}">
                                    <img src="{{ URL::asset('front/assets/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="{{ route('front.home')}}">HOME</a></li>
                                        <li><a href="{{ route('front.sobre')}}">SOBRE NÓS</a></li>
                                        <li><a href="{{ route('front.contato')}}">FALE CONOSCO</a></li>
                                        <li><a href="{{ route('front.animais.index')}}">ANIMAIS</a></li>
                                        <a href="{{ route('front.contato')}}" class="ml-0 ml-lg-3 btn btn- btn-rounded text-light" style="background-color:orangered;">QUERO AJUDAR</a>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

   @yield('content')

    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Fale Conosco
                            </h3>
                            <ul class="address_line">
                                <li>+55 (21) 2264-0069</li>
                                <li>atendimento@anipat.com</li>
                                <li>47, Rua Laranja, Botafogo, RJ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Nossos Serviços
                            </h3>
                            <ul class="links">
                                <li><a href="#">Adote um cachorro</a></li>
                                <li><a href="#">Adote um gato</a></li>
                                <li><a href="#">Acompanhe a sua solicitação</a></li>
                                <li><a href="#">Envie o seu depoimento</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3  col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Links Rápidos
                            </h3>
                            <ul class="links">
                                <li><a href="{{ route('front.home') }}">Home</a></li>
                                <li><a href="{{ route('front.blog.index') }}">Blog</a></li>
                                <li><a href="{{ route('front.sobre') }}">Sobre nós</a></li>
                                <li><a href="{{ route('front.contato') }}">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Siga a gente nas redes sociais!
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>Copyright &copy; {{ date('Y') }} Todos os direitos reservados | Projeto feito com <i class="ti-heart" aria-hidden="true"></i> por Suellen, Raquel, Tiago, Vitor e Josué.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <script src="{{ url(mix('front/assets/js/contact.js')) }}"></script>
    <script src="{{ url(mix('front/assets/js/vendor.js')) }}"></script>
    <script src="{{ url(mix('front/assets/js/main.js')) }}"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>