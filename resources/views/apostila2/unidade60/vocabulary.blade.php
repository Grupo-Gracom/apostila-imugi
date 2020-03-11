@extends('layouts.template')
@section('titulo','Unit 60 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade60" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 60</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 60/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO JUMP / up and down / for joy</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO NOTICE / a problem / somebody-something doing something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO RELAX / in the swimming pool / all day</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 60/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Desperate</b></li>
						<li><b>Easily </b></li>
						<li><b>Deadlines</b></li>
						<li><b>Kind</b></li>
						<li><b>Deal</b></li>
						<li><b>Advise</b></li>
						<li><b>Pressure</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
