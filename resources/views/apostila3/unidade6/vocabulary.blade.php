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
				<ul class="lista-inline upper">
					<li><p><b>What’s your take on…</b></p></li>
					<li><p><b>To be supposed to</b></p></li>		
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Pop up</b></p></li>
					<li><p><b>No matter</b></p></li>
					<li><p><b>Achieve</b></p></li>
					<li><p><b>Add</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Gathering</b></p></li>
					<li><p><b>Dive into</b></p></li>
					<li><p><b>Entertain</b></p></li>								
					<li><p><b>Encouragement</b></p></li>								
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Frustration</b></p></li>
					<li><p><b>Follow</b></p></li>
					<li><p><b>Contribute</b></p></li>
					<li><p><b>might</b></p></li>
				</ul>
				<ul class="lista-inline upper" style="margin-top: 16px">
					<li><p><b>Authentic</b></p></li>
					<li><p><b>Showing</b></p></li>
					<li><p><b>Evolution</b></p></li>								
					<li><p><b>Underlying</b></p></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
