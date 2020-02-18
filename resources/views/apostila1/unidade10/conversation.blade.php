@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade10" data-etapa="conversation">
				<h3 class="barlow">UNIT 10</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<p style="margin-top: 16px"><b>Beatriz :</b>  Well class, now you all know me, but I don’t know you. Please tell me about yourself!</p>
				<p><b>Lucy :</b>  Hello. I am Lucy. My last name is Potter. I am from the U.K. I’m a graphic desig-ner and I love dancing and singing.</p>
				<p><b>Adam :</b>  Hey there! I’m ADAM Duke. I was born in Germany and I’m a 24-year-old jour-nalist. My hobby is creating infographics.</p>
				<p><b>Dulce :</b> What’s up? My name is Dulce Medina, but I go by Medina. I’m 28 and I was born in Costa Rica. I work as a graphic designer. I love good food, so my hobby is cooking.</p>
				<p><b>Nicolas :</b>  Hi! I’m Nicolas Kirk. My friends call me Nick. I’m a graphic designing student and my hobby is photography. Oh… and I’m from Denmark.</p>
				<p><b>Beatriz:</b>  Nice to meet you all! We have a multicultural class! I’m very happy to be your teacher during these classes.</p>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit1/unidade1.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
