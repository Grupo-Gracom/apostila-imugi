@extends('layouts.template')
@section('titulo','Unit 33 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade33"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 33</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO SMOKE / cigarette / a cigar / outdoor TO START / a relationship / a game / talking </p>
				<p>TO STOP / dancing / to dance / to smoke / smoking</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>ENGAGEMENT</b></li>
					<li><b>SUPPORTIVE</b></li>
					<li><b>FEEL</b></li>
					<li><b>STRAIGHT</b></li>
					<li><b>BEING</b></li>
					<li><b>NUBIE</b></li>
					<li><b>PROMOTE</b></li>
					<li><b>MISS</li>
					<li><b>LAB</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
