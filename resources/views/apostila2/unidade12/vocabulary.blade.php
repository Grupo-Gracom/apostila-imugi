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
<<<<<<< HEAD
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  EMOTION ADJECTIVES</h5>				
=======
				<h5 class="barlow" style="margin-top: 16px">A -  EMOTION ADJECTIVES</h5>
>>>>>>> 7867b387e9c143396f7f3f8543ca022c75f804f7
				<ul class="lista-inline">
					<li><b>Happy</b></li>
					<li><b>Sad</b></li>
					<li><b>Surprised</b></li>
					<li><b>Shocked</b></li>
					<li><b>Amazed</b></li>
					<li><b>Mesmerized</b></li>
					<li><b>Worried</b></li>
					<li><b>Bored</b></li>
					<li><b>Annoyed</b></li>
				</ul>
<<<<<<< HEAD
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 12/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
=======
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>
>>>>>>> 7867b387e9c143396f7f3f8543ca022c75f804f7
				<ul class="lista-inline">
					<li><b>Anxious</b></li>
					<li><b>Bring</b></li>
					<li><b>Stuff</b></li>
					<li><b>Wait</b></li>
					<li><b>Begin</b></li>
					<li><b>Nothing</b></li>
					<li><b>Enroll</b></li>
					<li><b>Light</b></li>
					<li><b>Choose</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
