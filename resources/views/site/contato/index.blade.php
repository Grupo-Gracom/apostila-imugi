@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
@include('layouts.site.menus.header')
<section class="depoimento_img"  style="margin-top:60px; background-image: url({{asset('assets/site/images/bg-nossas-unidades.png')}}); background-repeat:no-repeat; background-position: center bottom; background-size:100% heigth:100%;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center">
                                <h5 class="text-white nossas_unidades" style="margin-top:80px;">
                                        <span >NOSSAS </span> <br>
                                        <div style="height:30px;"></div>
                                        <span >UNIDADES </span>
                                        
                                </h5>
                                <div style="margin-top:120px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- escolas carousel style 1 -->
        <section style="padding-bottom:0px!important;">
            <div class="container">
                <div class="row">    
                    <div class="swiper-slider-clients swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/01.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/01.jpg')}}" alt="" style="width:80%!important;">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/02.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/02.jpg')}}" alt="" style="width:80%!important;">
                                </a>    
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/03.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/03.jpg')}}" alt="" style="width:80%!important;">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/04.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/04.jpg')}}" alt="" style="width:80%!important;">
                                </a>    
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/05.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/05.jpg')}}" alt="" style="width:80%!important;">
                                </a>    
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/06.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/06.jpg')}}" alt="" style="width:80%!important;">
                                </a>    
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/07.1.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">    
                                    <img src="{{asset('assets/site/images/unidades/07.jpg')}}" alt="" style="width:80%!important;">
                                </a>    
                            </div>
                            <div class="swiper-slide text-center">
                                <a data-fancybox="gallery" href="{{asset('assets/site/images/unidades/08.1.jpg')}}" data-caption="Conheça a Imugi - Tecnológia Educacional">
                                    <img src="{{asset('assets/site/images/unidades/08.jpg')}}" alt="" style="width:80%!important;">
                                </a>
                            </div>
                        
                        </div>
                    </div>
                </div>    
            </div>
        </section>
        <!-- client carousel style 1 end-->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn">
                        <h5 class="text-uppercase depoimentos">
                            ESTUDE NA IMUGI MAIS <br> 
                            <div style="height:10px;"></div>
                            PRÓXIMA DE VOCÊ
                        </h5>
                    </div>
                </div>
                <div style="height:50px!important;"></div>
                <div class="row">
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-4 col-md-6 md-margin-four-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">FORTALEZA / CE</div>
                            <p class="width-75 mx-auto">
                            Rua Major Facundo, 713 / Centro <br> (85) 3017-3556
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-4 col-md-6 sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">MACEIÓ / AL</div>
                            <p class="width-75 mx-auto">Av. Fernandes Lima, 175 / Maceió <br> (82) 3027-9225</p>
                        </div>
                    </div>
                     <!-- start features box item -->
                     <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">SÃO LUÍS / MA</div>
                            <p class="width-75 mx-auto">
                            Av Jerônimo de Albuquerque 62 - Cohab
                                (98) 3303-1923
                            </p>
                        </div>
                    </div>
                    <!-- start features box item -->
                </div>
                <div class="row mt-4">
                    <!-- end features box item -->
                    <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">MESSEJANA / CE</div>
                            <p class="width-75 mx-auto mt-2">
                            Rua Padre Carlos Alencar, 49 <br>
                            (85) 3103-0123
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                     <!-- end features box item -->
                     <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                        <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">MANAUS / AM</div>
                            <p class="width-75 mx-auto">
                                Av. Getúlio Vargas, 204 - Centro 
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- end features box item -->
                    <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                        <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-deep-green"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">ARAPIRACA / AL</div>
                            <p class="width-75 mx-auto">
                               Rua São Francisco, 941, Centro - Arapiraca
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="row mt-4">
                     <!-- end features box item -->
                     <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-dark-gray"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">ANAPÓLIS / GO</div>
                            <p class="width-75 mx-auto">
                                em implantação
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- end features box item -->
                    <div class="col-12 col-lg-4 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                        <div class="bg-white border-color-extra-medium-gray border text-center padding-eighteen-tb border-radius-4 position-relative h-100">
                            <div class="d-inline-block margin-20px-bottom"><i class="icon-map text-white-2 icon-round-small bg-dark-gray"></i></div>
                            <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">TERESINA / PI</div>
                            <p class="width-75 mx-auto">
                                em implantação
                            </p>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end services section -->
         <!-- start form style 04 section -->
  <section  style="background-image:url({{asset('assets/site/images/parallax-bg30.png')}})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Alguma dúvida? Deixe sua mensagem. <br>
                            
                        </span>
                        </div>
                    </div>
                </div>
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                </div>
												@endif
												@if ($message = Session::get('success'))
												<div class="alert alert-success alert-block">
													<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>{{ $message }}</strong>
												</div>
												@endif

                <form method="POST" action="{{route('enviarContato')}}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="bg-transparent border-color-medium-dark-gray medium-input" name="nome" placeholder="Nome"> 
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="telefone bg-transparent border-color-medium-dark-gray medium-input" name="telefone" placeholder="Telefone"> 
                        </div>
                        <div class="col-12 col-lg-6">  
                            <input type="text" class="bg-transparent border-color-medium-dark-gray medium-input" name="estado" placeholder="Estado"> 
                        </div>
                        <div class="col-12 col-lg-6">
                            <input type="text" class="bg-transparent border-color-medium-dark-gray medium-input" name="cidade" placeholder="Cidade"> 
                        </div>
                        <div class="col-12">
                            <textarea class="bg-transparent border-color-medium-dark-gray medium-textarea" name="mensagem" rows="6" placeholder="escreva sobre sua dúvida"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success btn-rounded btn-medium margin-20px-top sm-no-margin-top">Enviar </button>
                        </div>
                        </form>
                    </div>
                </form>
            </div>
        </section>
        <!-- end form style 04 section -->
        <!-- end about section -->
         <!-- start call to action section -->
         <section>
            <div class="container">
                <div class="col-md-12 row wow fadeIn">
                    <div class="col-md-3"></div>
                    <div class="col-md-4">
                        <h5 class="text-uppercase depoimentos" style="text-align:right!important;">
                            QUALQUER DÚVIDA
                        </h5>
                    </div>
                    <div class="col-md-4">    
                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5519994567998" target="_blank" class="btn btn-large btn btn-success  btn-rounded mr-0">FALE CONOSCO</a>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.site.footer')
 @endsection