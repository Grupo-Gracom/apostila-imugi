@extends('layouts.template')
@section('titulo','Unit 16 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade16" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 16 - Akira’S STUDENTS</h3>
				<!-- <p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit16/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>DEAR </b></li>
					<li><b>WOULD </b></li>
					<li><b>EACH </b></li>
					<li><b>ADVERTISE </b></li>
					<li><b>IMPROVE </b></li>
					<li><b>SHARE </b></li>
					<li><b>POST</b></li>					
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
