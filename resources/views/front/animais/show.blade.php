@extends('front.master.master')


@section('content')

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
<div class="container box_1170">
<div class="section-top-border">
        
        <div class="row">
            <div class="col-md-6">
                

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
            <div class="col-md-6 mt-sm-20">
            <h1 class="mb-30">ULISSES</h1>
            <ul class="mb-3 unordered-list">
                        <li>Macho</li>
                        <li>Branco e amarelo</li>
                        <li>Pelagem curta</li>                           
                        <li>Nascimento aproximado: agosto de 2019</li>
                            </ul> 
                <p>Beleza grega foi o que inspirou meu nome, Ulisses. Sou belo, com pelagem loira e branca, um excelente conselheiro e muito perspicaz. Para chegar a este oásis que é o AUG, encarei muitas batalhas e quase não resisti. Fui encontrado cambaleando numa calçada de Sapopemba, bem magro, e aceitei a ajuda recebida. Engordei e só fiquei com um caminhar mais charmoso. 
                    Sou um grande guerreiro, porém esse passado de lutas épicas não me interessa mais. Sou jovem, mas já me aposentei. Agora, sonho que ganho petiscos na boca, enquanto sou abanado deitado na caminha, e que filosofo ao seu lado, inspirando uma odisseia de paz. Como nos desenhos animados que vi pela TV.
                    Quer ser a Penélope da minha jornada? Estou castrado e vacinado, e sou negativo para FIV e FeLV.</p>
            </div>
        </div>
    </div>
    </div>


<!-- ================ contact section start ================= -->
<section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4"></div>


            <div class="row">
                <div class="col-12 mb-5">
                    <h2 class="contact-title text-center">Quero Adotar!</h2>
    <p class="sample-text text-center">
    Para a adoção ser feita, primeiramente preencha as informações solicitadas nos campos abaixo, sua solicitação será avaliada e entraremos em contato.
    </p>
    <div class="d-none d-sm-block mb-5 pb-4"></div>

                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="nome" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primeiro nome'" placeholder="Primeiro nome">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="sobrenome" id="sobrenome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sobrenome'" placeholder="Sobrenome">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="cpf" id="cpf" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CPF'" placeholder="CPF">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="idade" id="idade" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua idade'" placeholder="Sua idade">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="telefone" id="telefone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" placeholder="Telefone">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="cep" id="cep" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CEP'" placeholder="CEP">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                <input class="form-control valid" name="confirmar_email" id="confirmar_email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirme seu Email'" placeholder="Confirme seu Email">
                                </div>
                            </div>


                           

                        <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva o Porquê você quer me adotar :)'" placeholder=" Escreva o Porquê você quer me adotar :)"></textarea>
                                </div>
                            </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fa fa-venus-mars"></i></span>
                        <div class="media-body">
                            <h3>Sexo</h3>
                            <p>Macho</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fa fa-calendar"></i></span>
                        <div class="media-body">
                            <h3>Idade</h3>
                            <p>Aproximadamente 1 ano</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->

@endsection