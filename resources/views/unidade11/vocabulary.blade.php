@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade11" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 11 - COLOR TOOLS</h3>
				<p><b>Lesson goal:</b>  TEACH STUDENTS ABOUT BASIC COLOR TOOL OPTIONS AND FOCUS ON PRESENT CONTINUOUS TENSE.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/Unit11/Vocabulary/completo.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>CREATE</b></li>
					<li><b>TRY</b></li>
					<li><b>MAKE</b></li>
					<li><b>RECOMMEND</b></li>
					<li><b>SELECT</b></li>
					<li><b>CHOOSE</b></li>
					<li><b>PICK</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
