@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade27" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 27 - PROFESSOR VICTOR</h3>
				<p><b>Goal: </b> Have Students Understand The Market For Video Editors And Show Them How Photoshop May Be Useful When Taking The First Steps.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit27/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>ABOUT</b></li>
					<li><b>GRADUATE</b></li>
					<li><b>WELL-KNOWN</b></li>
					<li><b>USEFUL</b></li>
					<li><b>SETTING</b></li>
					<li><b>LEARN</b></li>
					<li><b>SHOW</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
