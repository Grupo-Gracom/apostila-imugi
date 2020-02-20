@extends('layouts.template')
@section('titulo','Unit 30 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<p><b>Goal: </b> Talk To Students About The Possibilities Of Effects In Videos Through Photoshop.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit30/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>QUITE</b></li>
					<li><b>AWESOME</b></li>
					<li><b>KNOWLEDGE</b></li>
					<li><b>COOL</b></li>
					<li><b>SURE</b></li>
					<li><b>SHORT</b></li>
					<li><b>A LOT OF</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
