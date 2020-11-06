@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
<section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg-socio-investidor.png')}}); background-repeat:no-repeat; background-size: cover; padding:100px 0px;">
<div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center text-lg-left md-no-padding-lr">
                                <img src="{{asset('assets/img/logo_imugi.png')}}" alt="">
                                <div style="height:50px;"></div>
                                <h5 class="educacao text-white-2">
                                    SEJA NOSSO SÓCIO
                                    <div style="height:10px;"></div>
                                    <span class="titulo_2"> INVESTIDOR </span>
                                    
                                <p class="text-extra-large width-90 font-weight-300 text-white md-width-100">
                                Invista R$ 23MIL e tenha lucro <br>
                                 mensal de R$ 3.500,00
                                </p>
                                <div style="height:150px;"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-xs-4 col-lg-4">
                            <div class="card lead-franquia">
                            
                                <div class="card-body">
                                    <p class="titulo_lead">Comece a Investir</p>
                                        
                                        <form method="POST" action="{{route('alunoContato')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" required class="form-control btn_lead" name="nome" placeholder="Nome">
                                         </div>
                                        <div class="form-group">
                                            <input type="text" required class="telefone form-control btn_lead" name="telefone" placeholder="Telefone">
                                        </div>
                                        <div class="form-group">
                                            <select name="unidade" class = "btn_lead_select">
                                                <option value="--" selected>Escolha a imugi mais próxima ;)</option>
                                                <option value="Anápolis">Anápolis / GO</option>
                                                <option value="Arapiraca">Arapiraca / AL</option>
                                                <option value="Fortaleza Centro"> Fortaleza / CE </option>
                                                <option value="Macéio">Macéio / AL</option>
                                                <option value="Manaus">Manaus / AM </option>
                                                <option value="Fortaleza Messejana">Messejana / CE</option>
                                                <option value="São Luís">São Luís / MA</option>  
                                                <option value="Sorocaba">Sorocaba / SP</option> 
                                                <option value="Vitória">Vitória / ES</option>   
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn_submit_lead btn-block" value="Quero agendar minha aula">
                                        </div>
                                    </form>
                                        <p class="obs_lead">*Nossa equipe irá entrar em contato   para  marcar   o melhor dia e horário para agendar sua aula</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
</section>
<img src="{{asset('assets/site/images/seta.png')}}" alt="" class="seta_franquia">
<section class="wow fadeIn pd-quem_somos" style="padding: 50px 0!important; margin-top:80px!important;">
                <div class="container"> 
                    <div class="row align-items-center">
                    <div class="col-12 col-lg-5 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                                <div class="top_centro"></div>
                                <span  class="quem_somos_franquia">
                                    Quem Somos:
                                 </span>
                                <p class="mt-4 desc-somos">
                                Fazemos parte do Grupo Gracom  que possui mais de 10 anos administrando redes com escolas próprias e franqueadas por todas as regiões do Brasil.
                                </p>
                                </p>
                                <p class="mt-4 desc-somos">
A Imugi é uma escola de Tecnologia e Educação que utiliza uma metodologia de ensino única abordando interdisciplinarmente conteúdos das áreas de: Robótica, game, programação, inglês e computação gráfica. 
Um novo mundo cria novas oportunidades! 

                                </p>

                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ykNaUMOa_Jk">
                            <img src="https://site.imugi.com.br/assets/site/images/video-institucional.jpg" alt="" class="w-100">
                            <div class="icon-play">
                                <div class="absolute-middle-center">
                                    <img src="https://site.imugi.com.br/assets/site/images/icon-play.png" alt="">
                                </div>
                            </div>
                        </a>
                            </div>
                    </div>
                    <!-- start feature box -->
                    <div class="col-12 col-md-6 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="row m-0">
                            <div class="col-12 col-lg-3 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                            <img src="{{asset('assets/site/images/icones/franqueado.png')}}" alt="">
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 p-0">
                                <span class="margin-5px-bottom d-block  sm-margin-10px-bottom titulo-investidor">FRANQUEADO</span>
                                <p class="lg-width-100 desc-investidor text-white">Realiza o investimento para
a aquisição, montagem e operação da unidade escolar. Receberá treinamento, Know How 
de todo o negócio e ficará responsável por
100% da operação. 
 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div style="height:80px;"></div>
            <section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg-modalidade.png')}}); background-repeat:no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="md-no-padding-lr">
                               <h2 class="titulo_franquia_cotista">
                                    Não cobramos taxa de <br>  Royalties e Publicidade
                                </h2>
                                <h4>100% do faturamento é da unidade</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
            <section class="border-top border-color-extra-light-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-uppercase diferenciais text-center  margin-20px-bottom font-weight-700 md-width-100">
                        DIFERENCIAIS <br> DA IMUGI
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-6 col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/1.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">UNIVERSIDADE <br> CORPORATIVA</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/2.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">ANÁLISE DE PONTO <br> COMERCIAL</h6>
                            </div>
                    </div>
                </div>
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-6 col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/4.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4  text-center diferenciais_itens">EQUIPE <br> MULTIDISCIPLINAR</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/2.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">CONSULTOR DE <br> TREINAMENTOS</h6>
                            </div>
                    </div>
                </div>
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-6 col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/1.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">MÉDIA DE <br> LUCRATIVIDADE</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/2.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">ANÁLISE DE PONTO <br> COMERCIAL</h6>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase depoimento margin-20px-bottom font-weight-700 md-width-100">
                            DEPOIMENTO DO FRANQUEADO
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <!-- start testimonial item -->
                        <div class="col-12 col-md-12 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                        <div>
                            <img src="{{asset('assets/site/images/michell.png')}}" alt="" >
                        </div>
                        <p class="mt-4">
                            Optei pela franquia da Imugi porque enxerguei a possibilidade de 
                            tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora 
                            de trabalhar em um mercado em ascensão. Fiquei surpreendido com a qualidade 
                            do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão,
                            arquitetônico e implantação. O suporte da franqueadora é incrível
                        </p>
                        <span class="text-extra-dark-gray mt-4 font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">MICHELL BEZERRA</span>
                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Franqueado - Unidade Macéio - AL</span>
                    </div>
                    <!-- end testimonial item -->
                </div> 
            </div>
        </section>
        <section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg-modalidade.png')}}); background-repeat:no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="md-no-padding-lr">
                               <h2 class="imugi-oferece">A Imugi Oferece </h2>
                                <h4 class="titulo_franquia_cotista">
                                    2 Modalidades<br> para o Investidor 
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
            <section style="padding:10px 0px 0px 0px!important;">
            <div class="container-fluid position-relative">
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('assets/site/images/investimento.png')}}" alt="" class="investimento">
                    </div>  
                </div>
            </div>
        </section>
 @endsection