@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade8" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 08 - REVIEW OF SOPHIA’S CLASSES</h3>
				<p><b>Lesson goal:</b>  Review the content studied in the last units during Sophia’s classes, explore more vocabulary and focus on text interpretation.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit8/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>LAST</b></li>
					<li><b>WANT</b></li>
					<li><b>DURING</b></li>
					<li><b>TAKE</b></li>
					<li><b>CAN</b></li>
					<li><b>DO</b></li>
					<li><b>MAKE</b></li>
					<li><b>BETWEEN</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
