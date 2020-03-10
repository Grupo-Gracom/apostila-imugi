@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 45</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" class="espacamento">A -  WORDS AND EXPRESSIONS</h5>				                                   
				<ul class="lista-inline">
					<li><b>TO CANCEL / a meeting / a date</b></li>
					<li><b>TO CRY / TO BREAK INTO TEARS / TO WEEP</b></li>
					<li><b>TO FALL / in love / from a tree / down</b></li>													
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>	
				<ul class="lista-inline">
					<li><b>Grampa</b></li>
					<li><b>Fiction</b></li>
					<li><b>Changing</b></li>
					<li><b>Slow</b></li>
					<li><b>Avoided</b></li>
					<li><b>Minds</b></li>
					<li><b>Mediate</b></li>
					<li><b>disagreement</b></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>
@endsection
