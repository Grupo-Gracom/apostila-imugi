@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade23" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
				<p><b>Goal:</b> Make Students Uderstand There Is A Difference In Spoken And Writt en Language. Focus On Expressions And The Presented Vocabulary.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit1/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>GONNA</b></li>
					<li><b>LIMITED</b></li>
					<li><b>BRUSH</b></li>
					<li><b>HARDNESS</b></li>
					<li><b>GOT IT</b></li>
					<li><b>HAS</b></li>
					<li><b>TEXTURE</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
