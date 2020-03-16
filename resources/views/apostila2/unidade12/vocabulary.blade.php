@extends('layouts.template')
@section('titulo','Unit 12 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade12" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 12</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 12/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  EMOTION ADJECTIVES</h5>				
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Happy</b></p></li>
					<li><p><b>Sad</b></p></li>
					<li><p><b>Surprised</b></p></li>
					<li><p><b>Shocked</b></p></li>
					<li><p><b>Amazed</b></p></li>
					<li><p><b>Mesmerized</b></p></li>
					<li><p><b>Worried</b></p></li>
					<li><p><b>Bored</b></p></li>
					<li><p><b>Annoyed</b></p></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 12/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline upper" style="margin-top:16px">
					<li><p><b>Anxious</b></p></li>
					<li><p><b>Bring</b></p></li>
					<li><p><b>Stuff</b></p></li>
					<li><p><b>Wait</b></p></li>
					<li><p><b>Begin</b></p></li>
					<li><p><b>Nothing</b></p></li>
					<li><p><b>Enroll</b></p></li>
					<li><p><b>Light</b></p></li>
					<li><p><b>Choose</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
