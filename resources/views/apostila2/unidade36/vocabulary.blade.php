@extends('layouts.template')
@section('titulo','Unit 36 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade36" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 36</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit36/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO HAPPEN / in a nice way / I a difficult way</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO LIVE / alone / by yourself / your own life / on your own</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO ORDER / a meal / a newspaper / fast food / in a restaurant / the dessert</b></ol>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>AgreedSubtitles</b></li>
						<li><b>Even though</b></li>
						<li><b>Under</b></li>
						<li><b>Worn out</b></li>
						<li><b>Together</b></li>
						<li><b>Point out</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
