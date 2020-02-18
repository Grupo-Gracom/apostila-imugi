@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="bem-vindo" class="box">
			<figure>
					<img src="{{ asset('assets/img/playgo/intro/bg-intro.jpg') }}" alt="">
				</figure>
				<h3 class="barlow">Seja Bem Vindo Ao Play GO</h3>
				<div class="bem-vindo-video">
					<video controls="" controlslist="nodownload" disablepictureinpicture="" src="{{ asset('assets/video/intro_playgo.mp4') }}" style="width:100%;"></video>
				</div>
				<div class="bem-vindo-conteudo">
					<p>Curso projetado para artistas ou amadores que procuram treinamento de efeitos gráficos e visuais ensinado interdisciplinarmente com a língua inglesa.</p>
					<p>Vivemos em um mundo digital, onde a interatividade está cada vez mais presente na vida das pessoas. Com as ferramentas certas do CG você irá dominar esse universo.</p>
					<p>Inglês é a lingua mais falada do mundo por não nativos. 70% das empresas internacionais do Brasil buscam profissionais que falem inglês podendo oferecer sálarios 30% a 50% maior ao daqueles sem o idioma.</p>
				</div>
				<div class="clear"></div>
			</div>
			
		</div>

	</main>

@endsection
