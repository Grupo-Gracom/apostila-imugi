@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade18" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 18 - SHAPE TOOL & ADOBE KULER</h3>
				<p><b>goal:</b>  Focus On Simple Past With Irregular Verbs. Contrast With The Present Form. Explore Differences Between Simple Present And Simple Past Auxilary Verbs.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit18/vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>MADE</b></li>
					<li><b>WAS</b></li>
					<li><b>STEP</b></li>
					<li><b>SOUND</b></li>
					<li><b>KIND OF</b></li>					
					<li><b>VARIETY</b></li>
					<li><b>IMPLY</b></li>
					<li><b>PALET</b></li>					
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
