@extends('layouts.template')
@section('titulo','Unit 27 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 27</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 27/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO EXPLAIN / a problem / a situation / yourself</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO LISTEN / to music / a conversation / a friend / to somebody / a podcast</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO PAY / the bills / attention / a visit</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 27/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>By the way</b></li>
						<li><b>Ankle</b></li>
						<li><b>Healed</b></li>
						<li><b>Avoid</b></li>
						<li><b>Standing</b></li>
						<li><b>Prevent</b></li>
						<li><b>Injuries</b></li>
						<li><b>Go on</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
