@extends('layouts.portal.template')
@section('titulo','Portal do Aluno | Editar Perfil')
@section('conteudo')
@include('layouts.portal.menus.sidebar')
<div id="main-wrapper">
	<div id="main" class="ajaxable layout-wide">
    @include('layouts.portal.header')
		<!-- END HEADER -->

<div class="header-hero-section">
</div>
<div id="content" class="no-sidebar-page">
<div id="content-wrap" class="page-builder">
	<section id="page-content">
	<div class="clearfix">
		<div class="carousel slide">
					  <div class="carousel-inner">
					    <div class="item active">
						<form method="POST" action="https://www.fpeduc.com/ava/index.php" target="_blank" style="background-color:#fff;">
						<input type="image" src="{{asset('assets/portal/images/aovivo/aovivo.jpg')}}" alt="Submit" style="width:100%;">
						<input type="hidden" name="matricula_portal" value="{{ Auth::user()->matricula}}">
						<input type="hidden" name="email_portal" value="{{ Auth::user()->email}}">
						<input type="hidden" name="nome_portal" value="{{ Auth::user()->name}}">
						<input type="hidden" name="unidade_portal" value="{{$aluno->turma->cod_unidade}}">
						
					</form>
					    </div>
					  </div>
			</div>
		<div class="be-section clearfix" data-headerscheme="background--light" style="background-image: url({{asset('assets/portal/images/bg.gif')}});">
			<div class="be-section-pad clearfix pading-bt-100">
				<div class="be-row be-wrap clearfix">
					<div class="one-col column-block clearfix">
						<h2 class="text-center"><strong><span class="color-white">INFORMAÇÕES PESSOAIS</span></strong></h2>
						<p class="text-center">
							<span class="dados_pessoais">edite seus dados pessoais.</span>
						</p>
						<p class="text-center">
							<a href="https://www.facebook.com/imugieducacao/" target="_blank" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-facebook" style="background-color: inherit; color: #fff; font-size: 26px;" data-animation="fadeIn" data-bg-color="inherit" data-color="fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>

							<a href="https://www.instagram.com/imugieducacao/" target="_blank" class="icon-shortcode " data-animation="fadeIn"><i class="font-icon icon-instagram" style="background-color: inherit; color: #fff; font-size: 28px;" data-animation="fadeIn" data-bg-color="inherit" data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>

							<a href="https://www.youtube.com/channel/UC93pN5GQ5bswL8cyMHMNb0g" target="_blank" class="icon-shortcode" data-animation="fadeIn"><i class="font-icon icon-youtube" style="background-color: inherit; color: #fff; font-size: 28px;" data-animation="fadeIn" data-bg-color="inherit"  data-color="#fff" data-hover-color="#fff" data-border-color="#fff" data-hover-border-color="#000"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

		 <div class="be-section  clearfix" data-headerscheme="background--dark">
			                    <div class="clearfix padding-100">
			                        <div class="col-md-2"></div>
			                            <div class="col-md-6 column-block" style="">

			                                <h3><i class="fa fa-user"></i> Meu Perfil</h3>
			                                <p>informações pessoais .</p>
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
											
												    <form method="post" action="{{url('/atualizar-perfil', $aluno->id)}}">
														{{csrf_field()}}
													
												    <label>Nome (*) </label>
												    <input type="text" name="nome" class="span3"   value="{{$aluno->name}}">
												    <label>Matricula(*) </label>
												    <input type="text" name="matricula" class="span3" readonly required value="{{$aluno->matricula}}">
												    <label>Email (*)</label>
												    <input type="text" name="email" class="span3" required value="{{$aluno->email}}">
												    <label>Senha(*)</label>
												    <input type="password" name="nova_senha" class="span3" value="{{$aluno->password}}">
												    <input type="submit" value="Editar Informações" class="btn_salvar">
												    <div class="clearfix"></div>
												    </form>
													
												</div>
			                                </div>
			                            </div>
			                    </div>
			                </div>
			            </div>
                        @include('layouts.portal.footer')
			         </div>
	</div>
</div>
<a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>
</div>
 @endsection