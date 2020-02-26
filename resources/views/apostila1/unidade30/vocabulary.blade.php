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
				<div class="clear"></div>
				<ul class="lista-inline">
					<li><p><b>QUITE</b></p></li>
					<li><p><b>AWESOME</b></p></li>
					<li><p><b>KNOWLEDGE</b></p></li>
					<li><p><b>COOL</b></p></li>
					<li><p><b>SURE</b></p></li>
					<li><p><b>SHORT</b></p></li>
					<li><p><b>A LOT OF</b></p></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
