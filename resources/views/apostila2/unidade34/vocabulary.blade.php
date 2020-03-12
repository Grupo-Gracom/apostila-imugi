@extends('layouts.template')
@section('titulo','Unit 34 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade34"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 34</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 34/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO SWIM / well / in the lake / in a swimming pool / in the sea</p>
				<p>TO TIE / the shoes / the knot</p>
				<p>TO TRAIN / a group of people / someone / staff / a team</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 34/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>

				<ul class="lista-inline">
					<li><b>HOPE</b></li>
					<li><b>SAW</b></li>
					<li><b>TAKE</b></li>
					<li><b>ADVANTAGE</b></li>
					<li><b>SKILLS</b></li>
					<li><b>TO BE IN</b></li>
					<li><b>WORRY</b></li>
					<li><b>DEAL</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection