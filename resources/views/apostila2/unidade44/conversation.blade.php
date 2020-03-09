@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="conversation">
				<h3 class="barlow">UNIT 44</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<div class="espacamento">
					<span class="play-audio">( Aperte o play )</span>
					<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/conversation/conversation.ogg') }}" type="audio/ogg">
					</audio>
				</div>
				<P><B>Laura: </B>My character is going to be a high school student. She’s extremely shy and
				introspective. In school , her friends think she is weird. She lives with her parents. They
				are completely different of her. Her mother is talkative and loves parties and social
				events. Her father is a sales person and knows everybody in the city. Although she’s shy
				and introspective, she’s addicted to guitars. She has a guitar that she calls Four Seasons.
				Whenever she feels that something is wrong she can play different accords and she may
				change the weather just with the sound of it. When she plays, she becomes completely
				different. She becomes confident, strong, bold and is able to solve problems very easily.
				On the other hand, she becomes very impatient with dumb people.</P>
				<P><B>Gleen: </B>Oh my goodness. I loved the guitar stuff And the personality traits. Cool Laura.
				(to be continued)</P>				
				<figure class="metade espacamento">
					<img src="{{ asset('assets/img/dominating/unit44/conversation.png') }}" alt="Garotos festejando">
				</figure>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
