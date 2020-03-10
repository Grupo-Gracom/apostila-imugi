@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade11" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 11</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 11/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A - EXPRESSIONS</h5>
				<p>For sure By the way As I said/mentioned before I have no idea Well, let me see Well, let me think I have to think about it That’s a good question</p>
				<h5 class="barlow" style="margin-top: 16px">B – WORDS IN CONTEXT</h5>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 11/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>Finish</b></li>
					<li><b>Currently</b></li>
					<li><b>Actually</b></li>
					<li><b>Touch</b></li>
					<li><b>Take</b></li>
					<li><b>NGO</b></li>
					<li><b>Orphan</b></li>
					<li><b>Getting</b></li>
					<li><b>back</b></li>
					<li><b>Choose</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
