@extends('layouts.template')
@section('titulo','Unit 37 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade37" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 37</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit37/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO PRACTICE / sports / English / the piano / the guitar / a new skill</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO ANSWER / a phone call / a question / a job ad (advertisement) </b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO CLEAN / a place / a person (two meanings : to make things clean /to rob)</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Get</b></li>
						<li><b>Consider</b></li>
						<li><b>Realized</b></li>
						<li><b>Ones</b></li>
						<li><b>Gotta</b></li>
						<li><b>Chance</b></li>
						<li><b>Bring</b></li>
						<li><b>Own</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
