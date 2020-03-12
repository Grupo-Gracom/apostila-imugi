@extends('layouts.template')
@section('titulo','Unit 59 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade59" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 59</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 59/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO YELL / at somebody / out in surprise-pain / </b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO BAKE / a cake / a pie</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO DATE / a girl / a boy</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 59/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Calmer </b></li>
						<li><b>Freaking </b></li>
						<li><b>out</b></li>
						<li><b>Managed</b></li>
						<li><b>Wrong</b></li>
						<li><b>Desperate</b></li>
						<li><b>Evaluate</b></li>
						<li><b>Decide Hint</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
