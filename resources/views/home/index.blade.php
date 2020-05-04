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
				<h3 class="barlow">Seu material didático exclusivo!</h3>

				@if($aluno->turma->tipo_unidade == 0)
					<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo_unidade }}" data-material="{{$aluno->turma->curso ?? ''}}">
				@else
					<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo_unidade }}" data-material="{{$aluno->material->nivel ?? ''}}">
				@endif
				<ul class="capas">
					<!-- PLAYGO -->
					<li class="deactive playgo">
						<figure>
							<a href="apostila1/intro1/intro"><img src="{{ asset('assets/img/playgo.png') }}" alt="Play Go"></a>
						</figure>
					</li>
					<!-- PHOTOSHOP -->
					<li class="deactive photoshop">
						<figure>
							<a href="https://imugi.com.br/portaldoaluno/demo/imugi/photoshop.html" target="_blank">
								<img src="{{ asset('assets/img/photoshop.png') }}" alt="Photoshop">
							</a>
						</figure>
					</li>
					<!-- DOMINATING -->
					<li class="deactive dominating">
						<figure>
							<a href="apostila2/intro2/intro"> <img src="{{ asset('assets/img/dominating.png') }}" alt="Dominating"></a>
						</figure>
					</li>
				</ul>
				<ul class="capas">
					<!-- GAMES AND ANIMATION -->
					<li class="deactive games">
						<figure>
							<a href="https://imugi.com.br/portaldoaluno/demo/imugi/cinema4d.html" target="_blank">
								<img src="{{ asset('assets/img/gamesandanimation.png') }}" alt="Games">
							</a>
						</figure>
					</li>
					<!-- MASTER OF LANGUAGE -->
					<li class="deactive master">
						<figure>
							<a href="apostila3/intro3/intro"><img src="{{ asset('assets/img/masteroflanguage.png') }}" alt="MASTER OF LANGUAGE"></a>
						</figure>
					</li>
					<!-- VIDEO EDITION -->
					<li class="deactive video">
						<figure>
							<a href="https://imugi.com.br/portaldoaluno/demo/imugi/video_edition.html" target="_blank">
								<img src="{{ asset('assets/img/videoedition.png') }}" alt="Video Edition">
							</a>
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</main>
	<script>
		var material = $('input[name="liberaMaterial"]').attr("data-material");
		var tipo = $('input[name="liberaMaterial"]').attr("data-tipo");
		console.log(tipo);
		$(document).ready(function(){
			// switch (tipo) {
			// 	case 0 :
			// 		switch (material){
			// 			case "PLAY GO + PHOTOSHOP":
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$('.dominating a').removeAttr('href');
			// 				$('.games a').removeAttr('href');
			// 				$('.master a').removeAttr('href');
			// 				$('.video a').removeAttr('href');
			// 			break;
			// 			case "CGFLY":
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$(".dominating").removeClass("deactive");
			// 				$(".games").removeClass("deactive");
			// 				$('.master a').removeAttr('href');
			// 				$('.video a').removeAttr('href');
			// 			break;
			// 			default:
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$(".dominating").removeClass("deactive");
			// 				$(".master").removeClass("deactive");
			// 				$(".games").removeClass("deactive");
			// 				$(".video").removeClass("deactive");
			// 			break;

			// 		}
			// 	break;
			// 	case 1 :
			// 		switch (material){
			// 			case 1:
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$('.dominating a').removeAttr('href');
			// 				$('.games a').removeAttr('href');
			// 				$('.master a').removeAttr('href');
			// 				$('.video a').removeAttr('href');
			// 			break;
			// 			case 2:
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$(".dominating").removeClass("deactive");
			// 				$(".games").removeClass("deactive");
			// 				$('.master a').removeAttr('href');
			// 				$('.video a').removeAttr('href');
			// 			break;
			// 			default:
			// 				$(".playgo").removeClass("deactive");
			// 				$(".photoshop").removeClass("deactive");
			// 				$(".dominating").removeClass("deactive");
			// 				$(".master").removeClass("deactive");
			// 				$(".games").removeClass("deactive");
			// 				$(".video").removeClass("deactive");
			// 			break;
			// 		}
			// 	break;
			// }

			if(tipo == 0){
				if(material == "PLAY GO + PHOTOSHOP"){
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$('.dominating a').removeAttr('href');
					$('.games a').removeAttr('href');
					$('.master a').removeAttr('href');
					$('.video a').removeAttr('href');
				}else if(material == "CGFLY"){
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$(".dominating").removeClass("deactive");
					$(".games").removeClass("deactive");
					$('.master a').removeAttr('href');
					$('.video a').removeAttr('href');
				}else{
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$(".dominating").removeClass("deactive");
					$(".master").removeClass("deactive");
					$(".games").removeClass("deactive");
					$(".video").removeClass("deactive");
				}
			}else{
				if(material == 1){
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$('.dominating a').removeAttr('href');
					$('.games a').removeAttr('href');
					$('.master a').removeAttr('href');
					$('.video a').removeAttr('href');
				}else if(material == 2){
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$(".dominating").removeClass("deactive");
					$(".games").removeClass("deactive");
					$('.master a').removeAttr('href');
					$('.video a').removeAttr('href');
				}else{
					$(".playgo").removeClass("deactive");
					$(".photoshop").removeClass("deactive");
					$(".dominating").removeClass("deactive");
					$(".master").removeClass("deactive");
					$(".games").removeClass("deactive");
					$(".video").removeClass("deactive");
				}
			}

        });
	</script>

@endsection
