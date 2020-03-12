@extends('layouts.template')
@section('titulo','Unit 48 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade48"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 48</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 48/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO PRETEND TO BE / happy / sad / sorry / another person</p>
				<p>TO SAY / a few words / something / nothing</p>
				<p>TO SURF / at the beach / the net</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 48/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>SMART</b></li>
					<li><b>TRY</b></li>
					<li><b>LIKE</b></li>
					<li><b>BUTTERFLY</b></li>
					<li><b>VIEW</b></li>
					<li><b>CAPTIVATE</b></li>
					<li><b>SAW</b></li>
					<li><b>THINK</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
