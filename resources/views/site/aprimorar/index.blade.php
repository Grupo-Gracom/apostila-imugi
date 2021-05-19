@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
@include('layouts.site.menus.header')
<div style="height:80px;"></div>
<section class="wow fadeIn bg_cota_img bg_aprimorar" style="background-image: url({{asset('assets/site/images/programa-aprimorar.png')}}); background-repeat:no-repeat; background-position: center top; background-size: contain;">
                <div class="container">
                    <div class="row">
                        <div class="md-margin-20px-bottom sm-margin-20px-bottom">
                            <div class="md-no-padding-lr">
                               <img src="{{asset('assets/site/images/logo-aprimorar.png')}}">
                                <p class="text-white oportunidade">
                                A oportunidade para você iniciar <br> sua <span class="destaque">carreira profissional </span>
                                </p>
                             </div>
                        </div>
                    </div>
                </div>
</section>
<img src="{{asset('assets/site/images/seta.png')}}" alt="" class="seta_aprimorar">
<section class="wow fadeIn pd-quem_somos" style="padding: 0px 0 50px 0!important; margin-top:80px!important;">
                <div class="container"> 
                    <div class="row align-items-center">
                    <div class="col-12 col-lg-5 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                               
                                <span  class="quem_somos_aprimorar">
                                Programa de orientação <br>
                                para o mercado de trabalho
                                 </span>
                                <p class="mt-4 desc-somos">
                                Um dos grandes diferenciais da Imugi é o exclusivo
programa de orientação para o mercado de trabalho,
que tem como objetivo indicar e, sempre que possível, encaminhar alunos para as empresas parceiras, bem como orientá-los a se portar em entrevistas de emprego.
                                </p>
                                </p>
                                <p class="mt-4 desc-somos">

                                Com isso, os alunos são preparados para disputar
as vagas do mercado de trabalho com seriedade
e profissionalismo sem custo algum.
                                </p>
                            </div>
                        <div class="col-12 col-lg-7 text-center wow fadeInLeft">
                                <img src="{{asset('assets/site/images/aprimorar_lateral.png')}}" alt="" class="w-80">
                        </div> 
                       
                    </div>
                </div>
            </section>
            <section class="border-top border-color-extra-light-gray wow fadeIn" style="background-color:#E5E5E5;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase diferenciais  margin-20px-bottom font-weight-700 md-width-100">
                        COMO FUNCIONA?
                        </h5>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-1 col-lg-1 col-md-1"></div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/funciona/1.png')}}" alt="" class="width-60 icone_como_funciona">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center etapas etapa-funciona">Inscrição <br> na Escola</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/funciona/2.png')}}" alt="" class="width-60 icone_como_funciona">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center etapas etapa-funciona">Ciclo de <br> Palestras</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/funciona/3.png')}}" alt="" class="width-60 icone_como_funciona">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center etapas etapa-funciona">Entrevista de <br> emprego</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/funciona/4.png')}}" alt="" class="width-60 icone_como_funciona">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center etapas etapa-funciona">Cadastro do <br> currículo</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/funciona/5.png')}}" alt="" class="width-60 icone_como_funciona">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center etapas etapa-funciona">Mercado de <br> trabalho</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-lg-1 col-md-1"></div>
                </div>
        </section>
        <section class="border-top border-color-extra-light-gray wow fadeIn" style="background-color:#D3FFD7;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase diferenciais  margin-20px-bottom font-weight-700 md-width-100">
                        ÁREAS DE ATUAÇÃO
                        </h5>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-1 col-lg-1 col-md-1"></div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/1.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Publicidade</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/2.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Ilustração</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/3.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Fotografia</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/4.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Design Gráfico</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/5.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Arte Final</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-lg-1 col-md-1"></div>
                </div>
                <div class="row margin-100px-top coluna_areas">
                    <div class="col-1 col-lg-1 col-md-1"></div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/6.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Edição de Fotos</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/7.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Direção de Arte</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/8.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Web Design</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/9.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Edição Audiovisual</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                <img src="{{asset('assets/site/images/areas/10.png')}}" alt="" class="width-60 icone_atuacao">
                            </div>
                            <div class="post-details">
                                <p class="mt-4 text-center areas">Social Media</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-1 col-lg-1 col-md-1"></div>
                </div>
        </section>
        <section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg_aprimorar_02.png')}}); background-repeat:no-repeat; background-size:cover;">
                <div class="container">
                    <div class="row">
                        <div class="md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="md-no-padding-lr">
                            
                                <h4 class="titulo_aprimorar">
                                Estamos aqui <br> para ajudar na <br> sua conquista!
                                </h4>
                                <p class="desc_aprimorar">Torne seu currículo mais atraente com o que há de mais moderno no meio tecnológico.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- start testimonial slider section -->
        <section class="fadeIn" style="padding:80px 0px 40px 0px!important; background-image: url({{asset('assets/site/images/bg-numeros-aprimorar.png')}}); background-repeat:no-repeat; background-position: 100% 60%; background-size:100%;">
            <div class="container">
                <div class="row position-relative margin-20px-top md-margin-20px-top sm-margin-20px-top">
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide">
                                <div class="margin-half-all box-aprimorar bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                <h1 class="numero_aprimorar">+45</h1>
                                    <p class="info-box">Alunos Contratados</p>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide">
                                <div class="margin-half-all box-aprimorar bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                <h1 class="numero_aprimorar">+65</h1>
                                    <p class="info-box">Alunos Encaminhados </p>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide">
                                <div class="margin-half-all box-aprimorar bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                <h1 class="numero_aprimorar">30</h1>
                                    <p class="info-box">Vagas Disponíveis </p>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>                        
            </div>
        </section>
        <!-- start testimonial slider section -->
        <section style="padding:20px 0px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn">
                        <h5 class="text-uppercase depoimentos">
                            Hall da Fama
                        </h5>
                    </div>
                </div>
                <div class="row position-relative margin-60px-top md-margin-70px-top sm-margin-50px-top">
                         <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/01.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/02.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/03.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/04.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                </div>
                <div class="row position-relative  no-top">
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/01.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/02.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/03.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/04.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                </div>
                <div class="row position-relative  no-top">
                         <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/01.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/02.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/03.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-3 col-md-6 swiper-slide md-margin-four-bottom">
                               <img src="{{asset('assets/site/images/encaminhados/04.png')}}" alt="" class="encaminhado">
                            </div>
                            <!-- end testimonial item -->
                </div>
            </div>
        </section>
        <!-- start testimonial slider section -->
        <section class="wow fadeIn" style="background-image: url({{asset('assets/site/images/depoimentos.png')}}); background-repeat:no-repeat; background-position: bottom; background-position-x: top; padding:0px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center wow fadeIn">
                        <h5 class="text-uppercase depoimentos">
                            Opinião dos nossos alunos
                        </h5>
                    </div>
                </div>
                <div class="row position-relative margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom"> A escola é maravilhosa e possui ótimos professores.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">ANA VITÓRIA</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom">Ambiente agradável e tecnológico com ótimos cursos.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">PEDRO HENRIQUE</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom">Referência em curso de inglês com computação gráfica,
                                        uma experiência que transformou minha vida profissional.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">VITOR RODRIGUES</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>                        
                        <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                    </div>
                </div>
            </div>
        </section>
            @include('layouts.site.footer')
 @endsection