@extends('layouts.template')
@section('titulo','Unit 29 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<p><b>Goal: </b> Explain To Students How Possessive Adjectives And Pronouns Differ.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit29/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>TO LAST</b></li>
					<li><b>GOT IT</b></li>
					<li><b>TO SET</b></li>
					<li><b>AT LEAST</b></li>
					<li><b>CLIP</b></li>
					<li><b>BELIEVE</b></li>
					<li><b>ONLY</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
