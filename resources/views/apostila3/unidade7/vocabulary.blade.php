@extends('layouts.template')
@section('titulo','Unit 07 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 7</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<li><b>Fasten your seat belt</b></li>
					<li><b>To be kidding</b></li>		
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>Dive into</b></li>
					<li><b>Take off</b></li>
					<li><b>Adhered</b></li>
					<li><b>Employee</b></li>
					<li><b>Broadcast</b></li>
					<li><b>Owner</b></li>
					<li><b>huge</b></li>								
					<li><b>Hit</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
