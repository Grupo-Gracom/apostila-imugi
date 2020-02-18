@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade3" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<p><b>Goal:</b> Getting to know Professor Sophia Jones and to create a basic understanding of how Photoshop works alongside photography.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/vocabulary/Page14Vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>MEET</b></li>
					<li><b>CALL</b></li>
					<li><b>TEACH</b></li>
					<li><b>KNOW</b></li>
					<li><b>PUBLISH</b></li>
					<li><b>PREFER</b></li>
					<li><b>OFFER</b></li>
					<li><b>CHOOSE</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
