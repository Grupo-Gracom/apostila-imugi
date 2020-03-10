@extends('layouts.template')
@section('titulo','Unit 9 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade9" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 9</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 9/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  PREPOSITIONS</h5>
				<div style="margin-top: 36px">
					<figure>
						<img src="{{ asset('assets/img/playgo/unit9/pagina-1.png') }}" alt="circulos multiplos">
					</figure>
				</div>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<ul class="lista-inline">
					<li><b>Field</b></li>
					<li><b>Like</b></li>
					<li><b>Cleanest</b></li>
					<li><b>Worst</b></li>
					<li><b>Manage</b></li>
					<li><b>Still</b></li>
					<li><b>Absent</b></li>
					<li><b>Chance</b></li>
					<li><b>Coming</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
