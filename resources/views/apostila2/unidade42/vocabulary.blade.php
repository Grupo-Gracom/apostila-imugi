@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade42" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 42</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" class="espacamento">A -  WORDS AND EXPRESSIONS</h5>				                                   
				<ul class="lista-inline">
					<li><b>TO ARRIVE / early / on time / late / at home / at work</b></li>
					<li><b>TO CARRY / a book / on a conversation / on doing something</b></li>
					<li><b>TO CATCH / a bus / a train / a cold</b></li>													
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>	
				<ul class="lista-inline">
					<li><b>Came up</b></li>
					<li><b>Filter</b></li>
					<li><b>According</b></li>
					<li><b>Hints</b></li>
					<li><b>Skills</b></li>
					<li><b>Master</b></li>
					<li><b>Advice</b></li>
					<li><b>Made up</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
