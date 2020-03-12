@extends('layouts.template')
@section('titulo','Unit 2 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2"  data-etapa="vocabulary">
				<h3 class="barlow">UNIT 02</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 2/1. VOCABULARY/VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - NATIONALITIES</h5>

				<ul class="lista-inline">
					<li ><b>BRASILIAN</b></li>
					<li><b>AMERICAN</b></li>
					<li><b>CANADIAN</b></li>
					<li><b>CHINESE</b></li>
					<li><b>JAPANESE</b></li>
					<li><b>FRENCH</b></li>
					<li><b>SPANISH</b></li>
					<li><b>COLOMBIAN</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">B - PROFESSIONS</h5>

				<ul class="lista-inline">
					<li><b>WEB DESIGNER</b></li>
					<li><b>YOUTUBER</b></li>
					<li><b>TEACHER</b></li>
					<li><b>EDITOR</b></li>
					<li><b>VIDEO MAKER</b></li>
					<li><b>ILLUSTRATOR</b></li>
					<li><b>PROGRAMMER</b></li>
					<li><b>DRAWER</b></li>
				</ul>

				<h5 class="barlow" style="margin-top: 16px">C - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>INTRODUCE</b></li>
					<li><b>INTERVIEW</b></li>
					<li><b>FULL NAME</b></li>
					<li><b>GUYS</b></li>
					<li><b>TURN</b></li>
					<li><b>TELL</b></li>
					<li><b>FEEL</b></li>
					<li><b>KNOW</b></li>
				</ul>

			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
