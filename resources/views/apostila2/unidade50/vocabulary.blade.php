@extends('layouts.template')
@section('titulo','Unit 50 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade50"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 50</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO SET / the table / a time / a date / the alarm clock</p>
				<p>TO UNDERLINE / a word / a sentence</p>
				<p>TO WAIT / just a second / for an hour / for hours</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>RESTING</b></li>
					<li><b>WAR</b></li>
					<li><b>FOLLOWED</b></li>
					<li><b>IMPROVED</b></li>
					<li><b>RELEASE</b></li>
					<li><b>FEATURE</b></li>
					<li><b>REMARKABLE</b></li>
					<li><b>MIND-BLOWING</li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
