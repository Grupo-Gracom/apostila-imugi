@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade44" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 44</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 44/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" class="espacamento">A -  WORDS AND EXPRESSIONS</h5>				                                   
				<ul class="lista-inline">
					<li><b>TO TASTE / good / awful</b></li>
					<li><b>TO UNDESTAND / a question / a problem / a person</b></li>
					<li><b>TO ASK / a question / a favor / permission</b></li>													
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>	
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 44/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>Character</b></li>
					<li><b>Introspective</b></li>
					<li><b>Weird</b></li>
					<li><b>Talkative</b></li>
					<li><b>Sales</b></li>
					<li><b>Addicted</b></li>
					<li><b>Seasons</b></li>
					<li><b>Accords</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
