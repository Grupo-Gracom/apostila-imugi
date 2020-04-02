@extends('layouts.template')
@section('titulo','Unit 11 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade11" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 11</h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/apostila2/UNIT 29/1. VOCABULARY/1. VOCABULARY.ogg') }}" type="audio/ogg">
				</audio>		
								
				<h5 class="barlow" style="margin-top: 16px">A - WORDS AND EXPRESSIONS</h5>				
				<ul class="lista-inline">
					<li><p><b>Caption</b></p></li>
					<li><p><b>Content Curation</b></p></li>
					<li><p><b>Chronological Feed</b></p></li>												
				</ul>				
				<h5 class="barlow" style="margin-top: 16px">B -  WORDS IN CONTEXT</h5>				
				<ul class="lista-inline">
					<li><p><b>Brainstorm</b></p></li>
					<li><p><b>Dive Into</b></p></li>
					<li><p><b>Pragmatic</b></p></li>
					<li><p><b>Meaningful</b></p></li>
					<li><p><b>Forget</b></p></li>
					<li><p><b>Such As</b></p></li>
					<li><p><b>Target</b></p></li>								
					<li><p><b>Bring</b></p></li>								
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
