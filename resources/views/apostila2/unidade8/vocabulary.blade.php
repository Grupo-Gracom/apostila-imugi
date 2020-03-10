@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade8" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 8</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 8/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  SHORT / LONG ADJECTIVES</h5>
				<ul class="lista-inline">
					<li><b>SHORT ></b></li>
					<li>Good</li>
					<li>Bad</li>
					<li>slow</li>
					<li>Fast</li>
					<li>New</li>
					<li>old</li>
					<li>small</li>
					<li>big</li>
				</ul>
				<ul class="lista-inline">
					<li><b>LONG ></b></li>
					<li>Intuitive</li>
					<li>Famous</li>
					<li>Intelligent</li>
					<li>Useful</li>
					<li>Expensive</li>
					<li>friendly</li>
					<li>Robust</li>
					<li>Difficult</li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 8/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>Mind-blowing</b></li>
					<li><b>Little bit</b></li>
					<li><b>Grow Way</b></li>
					<li><b>Engagement</b></li>
					<li><b>Easier</b></li>
					<li><b>Faster</b></li>
					<li><b>Buddy</b></li>
					<li><b>To code</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
