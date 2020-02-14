@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade24" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<p><b>Goal:</b> Explain To Students How The Eraser Is Not As Basic As It Sounds.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>FIX</b></li>
					<li><b>APARENT</b></li>
					<li><b>LESS</b></li>
					<li><b>KEEP</b></li>
					<li><b>HOWEVER</b></li>
					<li><b>OPACITY</b></li>
					<li><b>ENTIRELY</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
