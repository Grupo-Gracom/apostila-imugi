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
				@if($aluno->turma->tipo->tipo_unidade == 0)
					<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->turma->curso}}">
				@else
					<input type="hidden" name="liberaMaterial" data-tipo="{{ $aluno->turma->tipo->tipo_unidade }}" data-material="{{$aluno->material->nivel}}">
				@endif			
				<ul class="capas">
					<li class="deactive playgo">
						<figure>
							<a href="apostila1/intro1/intro"><img src="{{ asset('assets/img/playgo.png') }}" alt="Play Go"></a>
						</figure>
					</li>
					<li class="deactive dominating">
						<figure>
							<img src="{{ asset('assets/img/dominating.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive master">
						<figure>
							<img src="{{ asset('assets/img/masteroflanguage.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive photoshop">
						<figure>
							<img src="{{ asset('assets/img/photoshop.png') }}" alt="Play Go">
						</figure>
					</li>
					<li class="deactive games">
						<figure>
							<img src="{{ asset('assets/img/gamesandanimation.png') }}" alt="Play Go">
						</figure>
					</li>
				</ul>
			</div>
		</div>
	</main>
	<script>
		var material = $('input[name="liberaMaterial"]').attr("data-material");
		var tipo = $('input[name="liberaMaterial"]').attr("data-tipo");
		console.log(material);
		$(document).ready(function(){

			if(tipo == 0){
				if(material == 1){
					$(".playgo").removeClass("deactive");
					$(".dominate").removeClass("deactive");
				}
			}else{
				
			}
			
        });
	</script>

@endsection
