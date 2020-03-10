@extends('layouts.template')
@section('titulo','Unit 63 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade63" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 63</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit63/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO CLIMB / a mountain / a tree / the wall</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO CRASH / a car / into something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO CURSE / someone / something / somebody for doing something</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Make</b></li>
						<li><b>Gotta</b></li>
						<li><b>Asked</b></li>
						<li><b>Find</b></li>
						<li><b>Trivial</b></li>
						<li><b>Beyond</b></li>
						<li><b>Bold</b></li>
						<li><b>Winners</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
