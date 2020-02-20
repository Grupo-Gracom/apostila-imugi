@extends('layouts.template')
@section('titulo','Unit 2 | Vocabulary')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<p><b>Goal:</b> Promote a broad understanding of what Photoshop is and its utilities in people’s professional lives.</p>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/vocabulary/vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>EDIT</b></li>
					<li><b>DEVELOP</b></li>
					<li><b>SUBJECT</b></li>
					<li><b>PICTURE</b></li>
					<li><b>LAYOUT</b></li>
					<li><b>TODAY</b></li>
					<li><b>ANY</b></li>
					<li><b>FOR</b></li>
					<li><b>VERSION</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
