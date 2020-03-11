@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade26" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 26</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 26/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<li><b>TO WRITE / beautifully / awfully</b></li>
					<li><b>TO BUY / tickets / cars / an idea</b></li>
					<li><b>TO DRAW / pictures / conclusions</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 26/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Channel</b></li>
						<li><b>outdoor</b></li>
						<li><b>research</b></li>
						<li><b>Indoor</b></li>
						<li><b>Pay attention</b></li>
						<li><b>Shooting</b></li>
						<li><b>affordable</b></li>
						<li><b>synchronize</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
