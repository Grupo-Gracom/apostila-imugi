@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade64" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 64</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 64/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  WORDS AND EXPRESSIONS</h5>
				<ul class="lista-inline">
					<ol><b>TO DECIDE / something / to do something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO DISCOVER / a secret / how to do something</b></ol>
				</ul>
				<ul class="lista-inline">
					<ol><b>TO ENJOY / swimming / dancing</b></ol>
				</ul>

				<h5 class="barlow" style="margin-top: 32px">B -  WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 64/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div style="margin-top: 36px">
					<ul class="lista-inline">
						<li><b>Journey</b></li>
						<li><b>Willing</b></li>
						<li><b>Sharing</b></li>
						<li><b>Findings</b></li>
						<li><b>Failures</b></li>
						<li><b>Souls</b></li>
						<li><b>Wish</b></li>
						<li><b>Feel</b></li>
					</ul>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
