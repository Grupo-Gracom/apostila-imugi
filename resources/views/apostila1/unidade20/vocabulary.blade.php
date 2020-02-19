@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade20" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 20 - Akira’S REVIEW</h3>
				<!-- <p><b>goal:</b>  Focus On Simple Past With Irregular Verbs. Contrast With The Present Form. Explore Differences Between Simple Present And Simple Past Auxilary Verbs.</p> -->
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit20/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>COME</b></li>
					<li><b>END</b></li>
					<li><b>HAVE</b></li>
					<li><b>ASK</b></li>
					<li><b>ENOUGH</b></li>					
					<li><b>ACTUALLY</b></li>
					<li><b>REVIEW</b></li>										
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
