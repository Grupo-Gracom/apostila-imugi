@extends('layouts.template')
@section('titulo','Unit 58 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade58" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 58</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit58/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO SUE / a person / an institution</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO SUNBATHE / at the beach / at the club</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO TURN / on / off / up / around</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Lighting</b></li>
						<li><b>Missing</b></li>
						<li><b>At least</b></li>
						<li><b>Spent</b></li>
						<li><b>Done</b></li>
						<li><b>Send</b></li>
						<li><b>Draft</b></li>
						<li><b>Background</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
