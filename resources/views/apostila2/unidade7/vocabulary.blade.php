@extends('layouts.template')
@section('titulo','Unit 7 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade7" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 7</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit7/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  SEASONS OF THE YEAR.</h5>
				<ul class="lista-inline">
					<li><b>Winter</b></li>
					<li><b>Spring</b></li>
					<li><b>Summer</b></li>
					<li><b>Fall</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - TIME EXPRESSIONS.</h5>
				<ul class="lista-inline">
					<li><b>Now</b></li>
					<li><b>Right now</b></li>
					<li><b>These days</b></li>
					<li><b>This week</b></li>
					<li><b>This month</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>This year</b></li>
					<li><b>At the moment</b></li>
					<li><b>At the present Presently</b></li>
					<li><b>Nowadays</b></li>
					<li><b>Currently</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT.</h5>
				<ul class="lista-inline">
					<li><b>Going to</b></li>
					<li><b>Current</b></li>
					<li><b>Developing</b></li>
					<li><b>Briefing</b></li>
					<li><b>Scope</b></li>
					<li><b>Cool</b></li>
					<li><b>Adding</b></li>
					<li><b>Synchronize</b></li>
					<li><b>Outline</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
