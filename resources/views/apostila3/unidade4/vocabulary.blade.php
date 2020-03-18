@extends('layouts.template')
@section('titulo','Unit 04 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade4" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 4</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>												
				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>Promote</b></li>
					<li><b>To Be Nuts</b></li>
					<li><b>Brainstorm</b></li>
					<li><b>Allow</b></li>
					<li><b>Cheap</b></li>
					<li><b>Irreverent</b></li>
					<li><b>To Make</b></li>								
					<li><b>Transmit</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
