@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade43" data-etapa="conversation">
				<h3 class="barlow">UNIT 43</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<div class="espacamento">
					<span class="play-audio">( Aperte o play )</span>
					<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
					</audio>
				</div>
				<p><b>Gleen: </b>Hey you guys, what’s up? Can I tell you something?</p>
				<p><b>Students: </b>Yes teacher. What’s going on?</p>
				<p><b>Gleen: </b>Guys, I’m extremely curious to know more about the story. I got really excited
				with the ideas. Besides that, I believe that if you work hard on the creation of the
				characters’ personality, on the scenarios and on the connection of ideas, It’s gonna be
				simply fantastic.</p>
				<p><b>Akira: </b>Teacher, we started drawing the characters and also writing about them . There
				are three in the story. Each one represents one of us. One for me , one for Laura and one
				for John. We are following some RPG ideas to create them and give them some super
				powers.</p>
				<p><b>John: </b>it’s gonna be fun teacher. Wait and see.
				(to be continued)</p>				
				<figure class="metade espacamento">
					<img src="{{ asset('assets/img/dominating/unit43/conversation.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
