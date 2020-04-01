@extends('layouts.template')
@section('titulo','Unit 09 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade9" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 9</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>		
								
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>Thoughtful</b></li>
					<li><b>Concerned</b></li>
					<li><b>Feeling</b></li>
					<li><b>Frightens</b></li>
					<li><b>Resonate</b></li>
					<li><b>Spending</b></li>
					<li><b>Leadership</b></li>								
					<li><b>To plan</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection