@extends('layouts.template')
@section('titulo','Unit 29 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade29" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 29</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO COME / here / home / to class / by car </b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO CONTROL / the situation / the game / the anxiety </b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO COOK / well / Italian – French – Chinese – vegetarian food / sea food</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Similar</b></li>
						<li><b>Readers</b></li>
						<li><b>Hired</b></li>
						<li><b>Find</b></li>
						<li><b>Regarding</b></li>
						<li><b>Gotta</b></li>
						<li><b>Otherwise</b></li>
						<li><b>Give up</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
