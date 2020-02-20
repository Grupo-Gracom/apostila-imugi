@extends('layouts.template')
@section('titulo','Unit 17 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade17" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 17 - LAYERS AND GUIDES</h3>
				<!-- <p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit17/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>TELL</b></li>
					<li><b>SOON</b></li>
					<li><b>TROUBLE</b></li>
					<li><b>CONSUME</b></li>
					<li><b>LOOK</b></li>
					<li><b>PRECICE</b></li>
					<li><b>ALIGNED</b></li>					
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
