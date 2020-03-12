@extends('layouts.template')
@section('titulo','Unit 25 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade25"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 25</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 25/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO WAKE UP / early / late</p>
				<p>TO WATCH / movies / the news / series / animes / cartoons</p>
				<p>TO WORK / nine to five / 24-7 / shifts / full time / part time</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 25/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>

				<ul class="lista-inline">
					<li><b>AGREE</b></li>
					<li><b>APPOINTMENT</b></li>
					<li><b>ANKLE</b></li>
					<li><b>BIT</b></li>
					<li><b>ABSENT</b></li>
					<li><b>AWARE</b></li>
					<li><b>TAKE OVER</b></li>
					<li><b>GO ON</li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
