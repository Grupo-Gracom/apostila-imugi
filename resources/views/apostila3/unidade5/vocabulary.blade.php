@extends('layouts.template')
@section('titulo','Unit 05 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade5" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 5</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<li><b>On the other hand</b></li>
					<li><b>To deal with</b></li>					
					<li><b>To be smashed</b></li>					
				</ul>
				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>To Make</b></li>
					<li><b>Channel</b></li>
					<li><b>Crucify</b></li>
					<li><b>Appealing</b></li>
					<li><b>Private</b></li>
					<li><b>Haters</b></li>
					<li><b>Criticize</b></li>								
					<li><b>Side Effect</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
