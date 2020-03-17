@extends('layouts.template')
@section('titulo','Unit 01 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade1" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 1</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<li><b>To go on board</b></li>
					<li><b>To be a joke</b></li>					
					<li><b>To be kidding</b></li>					
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>Gonna</b></li>
					<li><b>Engage</b></li>
					<li><b>Stuff</b></li>
					<li><b>Brand</b></li>
					<li><b>Became</b></li>
					<li><b>Eager</b></li>
					<li><b>Shooting</b></li>								
					<li><b>Involved</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
