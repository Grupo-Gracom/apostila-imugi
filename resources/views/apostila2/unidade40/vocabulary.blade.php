@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade40" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 40</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 40/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO TAKE / a bus / a decision / a shower / a break / a nap / a chance</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO THINK / about something- someone / once / twice / over and over</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO TRY / hard / to do something / a new dish / a different food</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 40/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Find</b></li>
						<li><b>won</b></li>
						<li><b>Trying</b></li>
						<li><b>Cheese</b></li>
						<li><b>Trap</b></li>
						<li><b>Close</b></li>
						<li><b>Funny</b></li>
						<li><b>Recites </b></li>
						<li><b>Take</b></li>
						<li><b>place</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
