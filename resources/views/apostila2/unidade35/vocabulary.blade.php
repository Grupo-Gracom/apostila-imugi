@extends('layouts.template')
@section('titulo','Unit 35 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade35"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 35</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO TRAVEL / alone / by yourself / with friends / abroad</p>
				<p>TO VISIT / a friend / a city / a place</p>
				<p>TO VOTE / in the elections / for a person / for an idea</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>PRETEND</b></li>
					<li><b>IN ORDER</b></li>
					<li><b>GO FOR</b></li>
					<li><b>GATHERING</b></li>
					<li><b>BRAINSTORMING</b></li>
					<li><b>AT LEAST</b></li>
					<li><b>TO BE IN TOUCH</b></li>
					<li><b>INSPIRE</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
