@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade1" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 01 - INTRODUCTION TO GRAPHIC DESIGN PRODUCTION</h3>
				<p><b>Lesson Goal:</b> Permit a communication-friendly environment in order to make students feel comfortable in their first class while exploring their understanding of graphic design production, its applications and the demand for professionals in the market.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>WELCOME</b></li>
					<li><b>WORK</b></li>
					<li><b>MOVE</b></li>
					<li><b>INCLUDE</b></li>
					<li><b>HAVE</b></li>
					<li><b>GROW</b></li>
					<li><b>NEED</b></li>
					<li><b>USE</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
