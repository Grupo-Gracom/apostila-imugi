@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade32"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 32</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 32/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO SING / in tune / out of tune / a song / </p>
				<p>TO SIT / beside / on / down / in front of / between two people / behind someone</p>
				<p>TO SKIP / classes / a line / a rope</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 32/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>

				<ul class="lista-inline">
					<li><b>HAD</b></li>
					<li><b>CHANCE</b></li>
					<li><b>REVIEW</b></li>
					<li><b>ADDICTION</b></li>
					<li><b>STUFF</b></li>
					<li><b>SHARING</b></li>
					<li><b>GROWTH</b></li>
					<li><b>LAW</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
