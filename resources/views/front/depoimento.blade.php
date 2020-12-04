@extends('front.master.master')
@section('title', 'Testemunho')
@section('description', 'O maior site de adoção de animais da América Latina!')

@section('content')

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="alert alert-sucess bg-success text-white">{{ Session::get('message') }}</div>
@endif

<style> 
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/
#upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
    min-height: 100vh;
    background-color: #757f9a;
    background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}

</style>


<script> 


/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}


</script>

  
     <!-- bradcam_area_start -->
     <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Envie um Depoimento</h3>
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
            <form action="{{route('front.depoimentos.do')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                @csrf
                            <div class="row">    
                                <div class="col-sm-6"> 
                                    <div class="form-group">
                                        <input class="form-control valid" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
                                    </div>
                    
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="codigo_solicitacao" id="codigo_depoimento" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Codigo'" placeholder="Codigo">
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
                            
                            
                            <div class="container py-5">

    <!-- For demo purpose -->
    
        <div class="col-lg-6 mx-auto">

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg- shadow-sm border border-success"> 
            <input id="upload" class="d-none" type="file" name="imagem"> 
                <div class="input-group-append">
                    <label for="upload"  class="btn  m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Enviar Foto</small></label>
                </div>
                
            </div>
            <!-- Uploaded image area-->
            
            <div class="image-area mt-4"><img id="imageResult" src="" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
            <script>
                                    function readImage() {
                                        if (this.files && this.files[0]) {
                                            var file = new FileReader();
                                            file.onload = function(e) {
                                                document.getElementById("imageResult").src = e.target.result;
                                            };
                                            file.readAsDataURL(this.files[0]);
                                        }
                                    }
                                    document.getElementById("upload").addEventListener("change", readImage, false);
                                </script>

        </div>
    </div>




                            
                            
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
                        @foreach ($depoimentos as $item)

                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img style="width: 200px; height; 200px;"src="{{Storage::url($item->imagem)}}" alt="">
                                </div>
                                <div class="test_content">
                                <h4>{{$item->nome}}</h4>
                                <span>{{$item->titulo}}</span>
                                <p>{{$item->mensagem}}</p>
                                </div>
                            </div>
    
                        </div>

                @endforeach
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- testmonial_area_end  -->





    @endsection