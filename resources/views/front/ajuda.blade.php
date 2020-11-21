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
                        <h3>Quero Ajudar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->


    <!-- Start Sample Area -->
<section class="sample-text-area">
	<div class="container box_1170">
        <h3 class="text-heading text-center">Formas de Ajudar</h3>
        
        <div class="section-top-border">
			<div class="row">
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Ração para os animais</h4>
						<p>Nossos animais se alimentam duas vezes ao dia. Logo, gastamos uma quantidade muito grande de ração diariamente
                            precisamos muito da contribuição de vocês para esta situação.
                        </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Materiais de limpeza</h4>
						<p>Para que o ambiente possa se manter limpo, necessitamos de materiais de limpeza. Todos os dias os animais tem suas
                            necessidades e precisamos deixar tudo limpinho para que eles se sintam confortáveis em nossa ONG. Além disso,
                            você pode s evoluntariar para ir limpar o ambiente também.
                        </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-defination">
						<h4 class="mb-20">Passeio com os animais</h4>
						<p>Você pode escolher um animalzinho e ir passear com ele em algum dia da semana. Estamos abertos de segunda à sábado, de 9h às 17h. 
                        Nossos animais irão ficar muito felizes em sair um pouco.
                        </p>
					</div>
				</div>
			</div>
		</div>
        
        <h3 class="text-heading text-center">Como ajudar?</h3>
		<p class="sample-text text-center">
            Para ajudar nos envie um email nos falando como quer ajudar marcaremos a melhor forma para todos e então você fará parte 
            da equipe de voluntários.
        </p>
	</div>
</section>
<!-- End Sample Area -->

<!-- team_area_start  -->

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
                        <a href="{{ route('front.contato')}}" class="boxed-btn4">Envie-nos um email</a>
                        <p>Ou  <a href="#"> +880 4664 216</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection