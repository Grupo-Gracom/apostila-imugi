@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade15" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 15</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<h5 class="barlow" style="margin-top: 16px">A -  ADJECTIVES FOR DESCRIBING PEOPLE</h5>				
				<ul class="lista-inline">
					<li><b>Professional</b></li>
					<li><b>Competent</b></li>
					<li><b>Perfectionist</b></li>
					<li><b>Awesome</b></li>
					<li><b>Great</b></li>
					<li><b>Efficient</b></li>
					<li><b>Communicative</b></li>				
				</ul>
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><b>Level</b></li>
					<li><b>Reference</b></li>
					<li><b>Research</b></li>
					<li><b>Drawing</b></li>
					<li><b>When</b></li>
					<li><b>Discover</b></li>
					<li><b>Inspiring</b></li>
					<li><b>Hardworking</b></li>										
					<li><b>courage</b></li>										
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
