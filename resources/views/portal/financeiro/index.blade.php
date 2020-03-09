@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Home')
@section('conteudo')
@include('layouts.portal.menus.sidebar')
<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    @include('layouts.portal.header')
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="item active">
					    <a href="http://futuronopresente.com.br/" target="_blank">
					      <img src="{{asset('assets/portal/images/portal_fp.jpg')}}" alt="Portal do Aluno">
					      </a>
					    </div>
					  </div>


		<!-- END HEADER -->

<div class="header-hero-section">
</div>
<section id="content" class="no-sidebar-page">
<div id="content-wrap" class="page-builder">
	<section id="page-content">
	<div class="clearfix">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->

  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="{{asset('assets/portal/images/financeiro.jpg')}}" alt="Portal do Aluno">
			    </div>
			  </div>

					  <!-- Left and right controls -->
		  </div>
			</div>	
	</section>
</div>

		
		 <div class="be-section  clearfix" data-headerscheme="background--dark">
			                    <div class="clearfix padding-100">
			                        <div class="col-md-2"></div>
			                            <div class="col-md-6 column-block" style="">
			                                <h3>Solicite sua <br>
						2ª Via do Boleto.</h3>
			                                <p>Preencha o formulário abaixo que entraremos em contato com você o mais rápido possível.</p>
			                                <div class="wpcf7">
			                                   <div class="span3">
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
													<form method="post" action="{{url('/enviar-email')}}">
														{{ csrf_field() }}
														
														<label>Nome (*)</label>
														<input type="text" name="nome" class="span3" value="" />
														
														<label>Telefone (*) </label>
														<input type="text" name="telefone" class="span3" value="" />

														<label>Estado (*) </label>
														<input type="text" name="estado" class="span3" value="" />

														<label>Cidade (*) </label>
														<input type="text" name="cidade" class="span3" value="" />
														
														<label>Sua Mensagem :)</label>
														<textarea type="text" name="mensagem" class="span3" required="">
														</textarea>
														<input type="submit" name="send" class="btn_salvar">
														
													</form>
												</div>
			                                </div>
			                            </div>
			                        
			                    </div>
			                    <div>
								<h2 style="text-align: center;">Em 24H entraremos em contato <br>	 e enviaremos por e-mail</h2>
							</div>
							<br>
			                </div>
			            </div>

			         </div>

	</section>
	@include('layouts.portal.footer')
</div>
</section>
      
</div>

<a href="" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>
</div>      
      </div>
    </div>
  </div>
  
</div>
 @endsection