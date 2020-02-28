@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24"  data-etapa="vocabulary">

				<h3 class="barlow">UNIT 24</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>

				<p>TO RUN / miles / along the beach / a class / a project / a software</p>
				<p>TO SLEEP / calmly / well </p>
				<p>TO TALK / to somebody / a lot / for hours</p>

				<h5 class="barlow" style="margin-top: 16px">B - WORDS IN CONTEXT</h5>

				<ul class="lista-inline">
					<li><b>EVERYTHING</b></li>
					<li><b>DRAWER</b></li>
					<li><b>CLOSER</b></li>
					<li><b>ANYWAYS</b></li>
					<li><b>ALMOST</b></li>
					<li><b>DONE</b></li>
					<li><b>INSTALLING</b></li>
					<li><b>LOCKED</li>
					<li><b>SET UP</b></li>
				</ul>							
				
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
