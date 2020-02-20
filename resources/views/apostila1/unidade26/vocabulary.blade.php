@extends('layouts.template')
@section('titulo','Unit 26 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade26" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 26 - SARAH’S REVIEW</h3>
				<p><b>Goal:</b> Provide Students With A Better Understanding Of When To Apply Each Of The Tools Studied With Sarah.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>WAY</b></li>
					<li><b>YOUNG</b></li>
					<li><b>CANVAS</b></li>
					<li><b>CAPTURE</b></li>
					<li><b>SUNSET</b></li>
					<li><b>STEP</b></li>
					<li><b>CLOUD</b></li>
					<li><b>DELICACY</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
