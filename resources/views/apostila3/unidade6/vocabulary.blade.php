@extends('layouts.template')
@section('titulo','Unit 06 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade6" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 6</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<li><b>What’s your take on…</b></li>
					<li><b>To be supposed to</b></li>		
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>Pop up</b></li>
					<li><b>No matter</b></li>
					<li><b>Achieve</b></li>
					<li><b>Add</b></li>
					<li><b>Gathering</b></li>
					<li><b>Dive into</b></li>
					<li><b>Entertain</b></li>								
					<li><b>Encouragement</b></li>								
				</ul>
				<ul class="lista-inline">
					<li><b>Frustration</b></li>
					<li><b>Follow</b></li>
					<li><b>Contribute</b></li>
					<li><b>might</b></li>
					<li><b>Authentic</b></li>
					<li><b>Showing</b></li>
					<li><b>Evolution</b></li>								
					<li><b>Underlying</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
