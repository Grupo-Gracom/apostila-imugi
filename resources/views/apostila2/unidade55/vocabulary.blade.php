@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade54" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 54</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit54/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO SERVE / breakfast / lunch / dinner / somebody</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO STATE / an opinion / information</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b> TO CHECK / in / out / the information / the map</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Hard</b></li>
						<li><b>Budget Chances</b></li>
						<li><b>Star</b></li>
						<li><b>Blockbuster</b></li>
						<li><b>Key</b></li>
						<li><b>Unforgettable Touching</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
