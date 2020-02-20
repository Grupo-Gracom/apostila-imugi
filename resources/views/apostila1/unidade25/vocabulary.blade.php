@extends('layouts.template')
@section('titulo','Unit 25 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box"  data-apostila="apostila1" data-unidade="unidade25" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 25 - PEN TOOLS</h3>
				<p><b>Lesson goal:</b> COMPARE AND CONTRAST PEN TOOLS AND BRUSH TOOLS.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>NOTICE</b></li>
					<li><b>PRECISE</b></li>
					<li><b>FIGURE</b></li>
					<li><b>CHOICE</b></li>
					<li><b>GREAT</b></li>
					<li><b>EVEN</b></li>
					<li><b>APPRECIATE</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
