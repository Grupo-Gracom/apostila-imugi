@extends('layouts.template')
@section('titulo','UNIMUGI | Home')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-unidade="unidade6" data-etapa="vocabulary">
				<h3 class="barlow">UNIT 06 - </h3>
				<h5 class="barlow">1 - VOCABULARY</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/vocabulary/Page14Vocabulary.ogg') }}" type="audio/ogg">
				</audio>
				<ul class="lista-inline">
					<li><b>OPEN</b></li>
					<li><b>TOUCH UP</b></li>
					<li><b>CAN</b></li>
					<li><b>REMOVE</b></li>
					<li><b>BRUSH</b></li>
					<li><b>SOME</b></li>
					<li><b>ANSWER</b></li>
				</ul>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
