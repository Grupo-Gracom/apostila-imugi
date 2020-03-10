@extends('layouts.template')
@section('titulo','Unit 13 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 13</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 13/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<h5 class="barlow" style="margin-top: 16px">A -  PARTS OF THE BODY</h5>				
				<ul class="lista-inline">
					<li><b>Head</b></li>
					<li><b>Face</b></li>
					<li><b>Eyes</b></li>
					<li><b>Nose</b></li>
					<li><b>Mouth</b></li>
					<li><b>Teeth</b></li>
					<li><b>Took</b></li>
					<li><b>Neck</b></li>
					<li><b>Body</b></li>
				</ul>
				<ul class="lista-inline">
					<li><b>Hand</b></li>
					<li><b>Finger</b></li>
					<li><b>Elbow</b></li>
					<li><b>Arm</b></li>
					<li><b>Foot</b></li>
					<li><b>Toe</b></li>
					<li><b>Ankle</b></li>
					<li><b>Knee</b></li>
					<li><b>Leg</b></li>
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 13/1. VOCABULARY/2. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><b>Small </b></li>
					<li><b>Twisted </b></li>
					<li><b>Feel down </b></li>
					<li><b>Hit </b></li>
					<li><b>Floor </b></li>
					<li><b>Awesome </b></li>
					<li><b>Took</b></li>
					<li><b>Count on Buddy</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
